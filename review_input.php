<?php
// $id =$_GET["genre"];
// echo "GET:".$id;
include("functions.php");
session_start();
check_session_id();
$dbn ='mysql:dbname=review_base;charset=utf8mb4;port=3306;host=localhost';
$user = 'root';
$pwd = '';

try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit();
}


// SQL作成&実行
// todo_read.php

$sql = 'SELECT * FROM shop_no ORDER BY time DESC LIMIT 5'; 
$stmt = $pdo->prepare($sql);
//$stmt->bindValue($id,1,PDO::PARAM_STR);

$status = $stmt->execute();

try {//detaを取り出す
  $status = $stmt->execute();
  
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}
// SQL実行の処理

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);


$output = "";
foreach ($result as $record) {  //HTMLの生成
  $output .= "
  
   
    <div class=row>
      
      <div class=col-3>{$record['shop_name']}</div>
      <div class=col-2>{$record['genre']}</div>
      <div class=col>{$record['text']}</div>
      <div class=col-2>{$record['name']}さん</div>
     
    </div>
  
  ";
}

// $view = "";
// if($status == false){
//   $error = $stmt->errorInfo();
//   exit("ErrorQuery:".$error[2]);
// }else{
//   while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
//     $view .='<p>';
//     $view .='<a href="review_topik.php?id='.$result["shops_id"].'">';
//     $view .=$result["shop_name"];
//     $view .='</a>';
//     $view .=$result["word"];
//     //$view .=$result["reviewer_name"]." ".$result["tel"]."   ".$result["url"]."   ".$result["address"]."   ".$result["word"];
//     $view .='</p>';
//   }
//}

?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/jquery.bxslider.css">
  <link rel="stylesheet" href="style.css">
  <title>DB連携型todoリスト（入力画面）</title>
</head>

<body>
  <div class="row top_h">
    <h1 class="col-5 display-1">foods-LINKS</h1>
    <ul class="col-5 nav justify-content-end">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">top</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="review_read.php">all-shop</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">map</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="review_logout.php" tabindex="-1" aria-disabled="true">logout</a>
    </li>
    
    </ul>
  </div>
  <div class="wrapper">
    <div class="container black">
      ようこそ <?="{$_SESSION['username']}({$_SESSION['is_admin']})"?> さん
       <!-- 管理者ログイン -->
    <form action="review_login_act2.php" method="POST">
    <fieldset>
      <div>
         <input type="hidden" name="username" value='<?="{$_SESSION['username']}"?>'>
      </div>
      <div>
         管理者パスワード:<input type="password" name="password">
      </div>
      <div>
        <button>管理者画面へLogin</button>
      </div>
     
    </fieldset>
  </form>
      <div class="row justify-content-center">

        <div class="col-4">
          <div>
            <img src="img/j1.jpg" alt="和食" class="top_img">
          </div>
        <div>
          <a href='review_genre_washoku.php'>和食のお店一覧へ</a>
        </div>
    
        </div>
        <div class="col-4">
        <div>
          <img src="img/c1.jpg" alt="中華" class="top_img">
        </div>
        <div>
          <a href='review_genre_chuka.php'>中華のお店一覧へ</a>
        </div>
    
        </div>
        <div class="col-4">
          <div>
            <img src="img/i1.jpg" alt="イタリアン" class="top_img">
          </div>
          <div>
            <a href='review_genre_itarian.php'>イタリアンのお店一覧へ</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <div>
            <img src="img/f1.jpg" alt="フレンチ" class="top_img">
          </div>
          <div>
            <a href='review_genre_flench.php'>フレンチのお店一覧へ</a>
          </div>
        </div>
        <div class="col-4">
          <div class="top_img">
            <img src="img/k1.jpg" alt="韓国" class="top_img">
          </div>
          <div>
            <a href='review_genre_korean.php'>韓国料理のお店一覧へ</a>
          </div>
        </div>
        <div class="col-4">
          <div class="top_img">
            <img src="img/s1.jpg" alt="その他" class="top_img">
          </div>
          <div>
            <a href='review_genre_another.php'>その他のお店一覧へ</a>
          </div>
        </div>
      </div>
      <form action="review_create.php" method="POST" enctype="multipart/form-data">
        <fieldset>
      
   
    <legend>おすすめのお店を教えてください</legend>
          
      <div class="row">
        <p class="cms-thumb col-4"><img src="img/logo2.jpg" width="300"></p>
         <!-- <div class="col-6">みんなの声</div> -->
        <div class="col-6">
          <p>みんなの声</p>
          <div class="row">
            <div class=col-3>(店名)</div>
            <div class=col-2>(ジャンル)</div>
            <div class=col>(口コミ)</div>
            <div class=col-2>(投稿者)</div>
          </div>
          <br>
          <div class="row">
            <?= $output ?>
          </div>
        </div>
      </div>   
      <div class="row">
         
            <div class="col-6">
              <div col-5>
                <div class="row">
                  <div class="col-2">
                    投稿者:
                  </div>
                  <div class="col-1">
                    <input type="name" name="reviewer_name" value ='<?="{$_SESSION['username']}"?> さん' readonly>
                  </div>
                </div>
                <div class="row">
                  <div class="col-2">
                    お店の名前:
                  </div>
                  <div class="col-1">
                    <input type="text" name="shop_name">
                  </div>
                </div>
                <div>
                  お店のジャンル: <select name="genre">
                      <option value="和食">和食</option>
                      <option value="中華">中華</option>
                      <option value="イタリアン">イタリアン</option>
                      <option value="フレンチ">フレンチ</option>
                      <option value="韓国料理">韓国料理</option>
                      <option value="その他">その他</option>
                      </select>
                </div>
                <div class="row">
                  <div class="col-2">
                    連絡先:
                  </div>
                  <div class="col-1">
                    <input type="tel" name="tel">
                  </div>
                </div>
                <div class="row">
                  <div class="col-2">
                    URL:
                  </div>
                  <div class="col-1">
                    <input type="url" name="url">
                  </div>
                </div>
                <div class="row">
                  <div class="col-2">
                    住所:
                  </div>
                  <div class="col-1">
                    <input type="adress" name="address">
                  </div>
                </div>
                <div class="row">
                  <div class="col-2">
                    お店について:
                  </div>
                  <div class="col-1">
                    <input type="text" name="word">
                  </div>
            
                <input type="file"
                 id="avatar" name="img"
                 class="cms-item"
                 accept="image/*">
                 </div>
                 <div>
                  <button>submit</button>
                </div>
              </div>
            </div>
           
             
          
        </div>
          
          <!-- ------------------------------------------------------------- -->
        </fieldset>
      </form>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/jquery-3.0.0.js"></script>
<script>
//---------------------------------------------------
//画像サムネイル表示
//---------------------------------------------------
// アップロードするファイルを選択
$('input[type=file]').change(function() {
  //選択したファイルを取得し、file変数に格納
  var file = $(this).prop('files')[0];
  // 画像以外は処理を停止
  if (!file.type.match('image.*')) {
    // クリア
    $(this).val(''); //選択されてるファイルを空にする
    $('.cms-thumb > img').html(''); //画像表示箇所を空にする
    return;
  }
  // 画像表示
  var reader = new FileReader(); //1
  reader.onload = function() {   //2
    $('.cms-thumb > img').attr('src', reader.result);
  }
  reader.readAsDataURL(file);    //3
});
</script>
</body>

</html>