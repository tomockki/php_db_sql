
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
    div{padding: 10px;font-size:16px;}
    .head{background: tomato; padding-left:20px;}
</style>
</head>
<body>

<header>
  <nav class="navbar navbar-default">
    <div class = "head">
      <a class="navbar-brand" href="select.php">これまでのPDCA</a>
    </div>
  </nav>
</header>

    <section class = "form">
        <form action="insert.php" method="post">
            <div class = "fp">計画(Plan)<br><textarea name="p" cols="50" rows="20"></textarea></div>
            <div class = "fd">行動(Do)<br><textarea name="d" cols="50" rows="20"></textarea></div>
            <div class = "fc">評価(Check)<br><textarea name="c" cols="50" rows="20"></textarea></div>
            <div class = "fa">改善(Action)<br><textarea name="a" cols="50" rows="20"></textarea></div>
            <p><input type="submit" value="登録"></p>
        </form>
    </section>
</body>
</html>