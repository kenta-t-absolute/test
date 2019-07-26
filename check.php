<?php
$_SESSION["name"] = $_POST["name"];


 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>入力内容確認</title>
  <style type="text/css">
 .title{
    font-size:30px;
  }
 span{
   color:red
 }
  </style>
</head>
<body>
  <p class="title">入力内容確認</p>
  <form action="" method="post">
名前<br>

<?php echo $_POST["name"]; ?>

    <br><br>
名前（フリガナ）<br>
<?php echo $_POST["name2"]; ?>
    <br><br>
住所<br>
<?php echo $_POST["address"]; ?>
    <br><br>
性別<br>
<?php

if($_POST["sex"] == "men"){
  echo "男";
}else{
  echo "女";
  }
?>
    <br><br>
e-mail<br>
<?php echo $_POST["e-mail"]; ?>
  <br><br>
電話番号(ハイフン無し)<br>
<?php echo $_POST["phone"]; ?>
  <br><br>
  <a href="index.php?action=rewrite">修正する</a>
  <input type="submit" value="登録する">
  </form>
</body>
<html>
