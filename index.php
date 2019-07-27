<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>ユーザーデータベース</title>
  <style type="text/css">
 .title{
    font-size:30px;
  }

  </style>
</head>
<body>

<?php
//$_GET[]でrewriteは引き継がれてる
//check.phpで代入した$_SESSION["name"];がechoで表示出来ないのはなぜ？
//入力フォームに修正前の記載が出せない。。

echo $_GET["action"];
echo $_SESSION["name"];
if($_GET["action"] == rewrite){
  echo "名前あり";
}else{
  echo "名前無し";
}

?>

  <p class="title">ユーザーデータベース</p>
  <form action="check.php" method="POST" enctype="multipart/form-data">
名前<br>
    <input type="text" name="name" maxlength="255">
    <br><br>
名前（フリガナ）<br>
    <input type="text" name="name2" maxlength="255">
    <br><br>
住所<br>
    <input type="text" name="address" maxlength="255">
    <br><br>
性別<br>
  <input type="radio" class ="radio" name="sex" value="men">男
  <input type="radio" class="radio" name="sex" value="female">女
    <br><br>
e-mail<br>
  <input type="text" name="e-mail" maxlength="255">
  <br><br>
電話番号(ハイフン無し)<br>
  <input type="text" name="phone" maxlength="255">
  <br><br>
  <input type="submit" value="入力内容を確認">
  </form>
</body>
<html>
