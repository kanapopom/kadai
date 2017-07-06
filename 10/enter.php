

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css" />

<style>div{padding: 10px;font-size:16px;}</style>
<title>ユーザー登録</title>
</head>
<body>

<header>
  <header>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
      <div class="navbar-header"><a class="navbar-brand" href="nologin.php">データ一覧</a></div>
    </nav>
  </header>

</header>

<!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
<form name="form1" action="register.php" method="post">
NAME:<input type="text" name="name" /><br>
ID:<input type="text" name="lid" /><br>
PW:<input type="password" name="lpw" /><br>
<input type="text" name=kanri_flg  style="display:none" value="0"><br>
<input type="text" name=life_flg  style="display:none" value="0"><br>
<input type="submit" value="REGISTER" />
</form>


</body>
</html>
