<?php
// $id =$_GET["genre"];
// echo "GET:".$id;

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

$sql = 'SELECT * FROM shop_no'; 
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
  
    <thead>
    <div class='row justify-content-center'>
      
      <div class=col-1>{$record['name']}</div>
      <div class=col-4>{$record['text']}</div>
      <div class=col-3>{$record['time']}</div>
      <div class=col-1>
        <a href='user_edit.php?id={$record["id"]}'>edit</a>
      </div>
      <div class=col-1>
        <a href='review_delete.php?id={$record['id']}' >delete</a>
      </div>
      
    </div>
    </thead>
    </tr>
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
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </li>
    </ul>
  </div>
  <div class="wrapper">
    <div class="container black">
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
      <form action="review_create.php" method="POST">>
        <fieldset>
          <legend>おすすめのお店を教えてください</legend>
          <a href="review_read.php">一覧画面</a>
    
        <div class="row">
            <div class="col-6">
              <div col-5>
                <div class="row">
                  <div class="col-2">
                    投稿者:
                  </div>
                  <div class="col-1">
                    <input type="name" name="reviewer_name">
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
                 accept="image/png, image/jpeg">
                 </div>
                 <div>
                  <button>submit</button>
                </div>
              </div>
            </div>
           
              <!-- <div class="col-6">みんなの声</div> -->
              <div><?= $output ?></div>
          
        </div>
          
          <!-- ------------------------------------------------------------- -->
        </fieldset>
      </form>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>