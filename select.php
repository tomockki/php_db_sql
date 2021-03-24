<?php
try {
$pdo = new PDO('mysql:dbname=pdca;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

$stmt = $pdo->prepare("SELECT * FROM cycle");
$status = $stmt->execute();

$view="";
if($status==false){
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= "<p>".$result["id"]."："."計画".$result["indate"]."<br>".$result["p"]."</p>";
    $view .= "<p>".$result["id"]."："."実行".$result["indate"]."<br>".$result["d"]."</p>";
    $view .= "<p>".$result["id"]."："."評価".$result["indate"]."<br>".$result["c"]."</p>";
    $view .= "<p>".$result["id"]."："."改善".$result["indate"]."<br>".$result["a"]."</p>";
    $view .= "<br>"."<p>".$result["id"]."回目の結果はどうでしたか？"."</p>"."<br>";
  }

}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>PDCAサイクルリザルト</title>
<link rel="stylesheet" href="style.css">
<style>
  div{padding: 10px;font-size:16px;}
  .navi{background: tomato; padding-left:20px;}
</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="navi">
      <a class="navbar-brand" href="index.php">登録画面へ</a>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] $view-->
<div>
    <div class="container jumbotron"><?=$view?></div>
</div>
<!-- Main[End] -->

</body>
</html>
