<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>suit app</title>
  <link rel="stylesheet" type="text/css" href="style2.css" >
</head>
<body>
  <div class="mainvisual">
<h3>やりたい！を叶えるために</h4>
<p>現在地からオススメの場所さがします</p>

  </div>
  <form method="post" action="output_data.php" >
<div class="first">
    お名前: <input type="text" name="name">
  	EMAIL: <input type="text" name="mail"></div><br>
<div class="second">
    あなたの年齢を教えてください<br>
    <input type="radio" name="age" value="10代">10代<br>
    <input type="radio" name="age" value="20代">20代<br>
    <input type="radio" name="age" value="30代">30代<br>
    <input type="radio" name="age" value="40代">40代<br>
    <input type="radio" name="age" value="50代">50代<br>
    <input type="radio" name="age" value="60代以上">60代</div><br>
    <div class="third">
    いまやりたいことはなんですか<br>
    <input type="radio" name="activity" value="restaurant">ご飯が食べたい<br>
    <!-- map_api_restaurant -->
    <input type="radio" name="activity" value="shopping_mall">買い物がしたい<br>
    <!-- map_api_shopping_mall -->
    <input type="radio" name="activity" value="park">公園に行きたい<br>
    <!-- map_api_park -->
    <input type="radio" name="activity" value="cafe">カフェに行きたい<br>
    <!-- map_api_cafe -->
    <input type="radio" name="activity" value="night_club">ナイトクラブに行きたい</div><br>
    <!-- map_api_night_club -->
  <div class="button"><input type="submit" class=sub value="送信"></div>
  </form>
</body>
</html>
