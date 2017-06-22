
<!-- //index.php（登録フォームの画面ソースコードを全コピーして、このファイルをまるっと上書き保存） -->

<?php

// var_dump($_GET);
// exit;

$id = $_GET["id"];
echo "GET: ". $id;

try {
  $pdo = new PDO('mysql:dbname=gs_db35;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}
//３．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * from gs_an_table WHERE id=:a1");
$stmt->bindValue(':a1', $id);
$status = $stmt->execute();

if ($status == false) {
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
} else{
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
  // var_dump($row);
  // exit;
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>POSTデータ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="bm_update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>フリーアンケート</legend>
     <label>名前：<input type="text" name="name" value="<?=$row["name"]?>"></label><br>
     <label>Email：<input type="text" name="email" value="<?=$row["email"]?>"></label><br>
     <label><textArea name="naiyou" rows="4" cols="40"><?= $row["naiyou"] ?></textArea></label><br>
     <input type="hidden" name="id" value="<?=$row["id"]?>">
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->
</body>
</html>
