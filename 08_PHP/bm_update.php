<?php
//1.POSTでParamを取得
$id   = $_POST["id"];
$name   = $_POST["name"];
$email  = $_POST["email"];
$naiyou = $_POST["naiyou"];


//2.DB接続など
try {
  $pdo = new PDO('mysql:dbname=gs_db35;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

//3.UPDATE gs_an_table SET ....; で更新(bindValue)
//基本的にinsert.phpの処理の流れです。
$update = $pdo->prepare("UPDATE gs_an_table SET name=:name,
email=:email, naiyou=:naiyou WHERE id=:id");
$update ->bindValue(':name', $name, PDO::PARAM_STR);
$update ->bindValue(':email', $email , PDO::PARAM_STR);
$update ->bindValue(':naiyou', $naiyou , PDO::PARAM_STR);
$update ->bindValue(':id', $id , PDO::PARAM_INT);

$status = $update->execute();

header("Location: select.php");

?>
