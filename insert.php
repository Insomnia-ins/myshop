<?php
  $connect = mysqli_connect("127.0.0.1","root","","MarketAbm");
      
  $text_query = "SELECT * FROM products";
  $query = mysqli_query($connect, $text_query);
  $text_zaprosa_vstavit = "INSERT INTO products (title, description, img, price)
            VALUES('{$_GET["tit"]}', '{$_GET["des"]}', '{$_GET["img"]}', '{$_GET["price"]}')";
  $query_insert = mysqli_query($connect, $text_zaprosa_vstavit);

  header('Location: index.php');
?>