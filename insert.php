<?php

$p = $_POST["p"];
$d = $_POST["d"];
$c = $_POST["c"];
$a = $_POST["a"];

try {
  $pdo = new PDO('mysql:dbname=pdca;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}
$sql = "INSERT INTO cycle(id, p, d, c, a, indate )VALUES(NULL, :p, :d, :c, :a, sysdate())";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':p', $p, PDO::PARAM_STR);
$stmt->bindValue(':d', $d, PDO::PARAM_STR);
$stmt->bindValue(':c', $c, PDO::PARAM_STR);
$stmt->bindValue(':a', $a, PDO::PARAM_STR);
$status = $stmt->execute();

if($status==false){
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
} else {
  header("Location: index.php");
  exit;
}
