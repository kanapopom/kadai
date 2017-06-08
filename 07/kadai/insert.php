<?php
//1. POSTデータ取得
$title = $_POST["title"];
$name = $_POST["name"];
$detail = $_POST["detail"];

//2. DB接続します
try {
  $pdo = new PDO('mysql:dbname=gs_db35;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}
// tryの中でエラーが起きたらcatchでキャッチしてくれて、exitで分かる形に吐き出してくれる。接続できたら接続したものを$PDOという関数に入れてくれる。

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(id, title, name, detail,
indate )VALUES(NULL, :title, :name, :detail, sysdate())");
$stmt->bindValue(':title', $title, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':detail', $detail, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();
// executeは実行の関数。errorのときだけfalseが返ってくる。

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("Location: index.php");
  exit;

}
?>
