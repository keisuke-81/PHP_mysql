<?php
include("shop_no.php");

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
    <h1 class="col-5 display-1">foods-LINKS-all-shop</h1>
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
  <div class="wrapper">
    <div class="container ">
      <div class="row white_back justify-content-center">
        <legend>みんなの声（口コミ）一覧   新しく登録された順番です。</legend>
        <a href="review_input.php">topページ</a>
        <table>
          <thead>
            <div><?= $output ?></div>
          </thead>
        </table>
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