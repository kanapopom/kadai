<?php

$id= $_GET["id"];


try {
  $pdo = new PDO('mysql:dbname=gs_db35;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

$stmt = $pdo->prepare("DELETE FROM gs_an_table WHERE id=:id");
$stmt->bindValue(':id', $id);
$status = $stmt->execute();

if ($status == false) {
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
}else{
  header("Location:select.php");
}

 ?>
