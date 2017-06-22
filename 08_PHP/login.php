<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/main.css" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
<title>ユーザー登録</title>
</head>
<body>

<header>
  <header>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
      <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a><a class="navbar-brand" href="login.php">ユーザー登録</a></div>
    </nav>
  </header>

</header>

<!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
<form name="form1" action="register.php" method="post">
NAME:<input type="text" name="name" /><br>
ID:<input type="text" name="lid" /><br>
PW:<input type="password" name="lpw" /><br>
HOST:<input type="text" name=kanri_flg><br>
SIGNOUT:<input type="text" name=life_flg><br>
<input type="submit" value="REGISTER" />
</form>


</body>
</html>
