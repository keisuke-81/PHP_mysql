<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>todoリストログイン画面</title>
</head>

<body>
  <form action="review_login_act.php" method="POST">
    <fieldset>
      <legend>LINKS LOGIN</legend>
      <div>
        username: <input type="text" name="username">
      </div>
      <div>
        password: <input type="password" name="password">
      </div>
      <div>
        <button>Login</button>
      </div>
      <a href="review_register.php">or register</a>
    </fieldset>
  </form>

</body>

</html>