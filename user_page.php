<?php
include("functions.php");
session_start();
check_session_id();
//$id =$_GET["id"];
//echo "GET:".$id;
echo($_SESSION['username']);


?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>おすすめのお店を教えてください</title>
</head>

<body>
  <div class="row top_h ">
    <h1 class="col-5 display-1">foods-LINKS-master</h1>
    <ul class="col-5 nav justify-content-end">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">Active</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </li>
    </ul>
  </div>
  <div class="wrapper2">
    <div class="container ">
      <div class="row white_back justify-content-center">
        <div class="d-grid gap-2">
            <p>ようこそ <a href="user_page.php"><?="{$_SESSION['username']}"?></a> さん</p>
            <div>
                <p><?="{$_SESSION['username']}"?>さんの紹介店舗</p>
            </div>
            <div>
                <p><?="{$_SESSION['username']}"?>さんの口コミ</p>
            </div>
         
          <a href="review_input.php" >前のページへ戻る</a>
    </div>
        
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    const data = <?= json_encode($result)?>;
    console.log(data);

  </script>
</body>

</html>