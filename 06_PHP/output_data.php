<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES,'UTF-8');
$mail = htmlspecialchars($_POST['mail'], ENT_QUOTES,'UTF-8');
$age = htmlspecialchars($_POST['age'], ENT_QUOTES, 'UTF-8');
$activity = htmlspecialchars($_POST['activity'], ENT_QUOTES, 'UTF-8');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>suit app</title>
  <link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>
<div class="wrapper">

  <div class="display">
  <p><?=$age?>の<?=$name?>さん、
  あなたが行きたいと思う所はありますか？</p>
</div>

</div>
</body>
</html>

<?php
  include("cafe_search.html");
 ?>
