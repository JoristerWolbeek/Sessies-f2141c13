<?php
session_start();

if(isset($_POST["product"])){
  if($_POST["product"] == "1" || $_POST["product"] == "2" || $_POST["product"] == "3" ) {
    setcookie("product", $_POST["product"], time()+3600);
  }
}

if(isset($_COOKIE["product"])){
  echo("Het gekozen product ".$_COOKIE["product"]);
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
        <h1>Skateboard <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>
        <form method="post">
        <input type="text" name="product" placeholder="Number from 1 to 3"></input><br>
        <input type="submit" name="submit" value="Submit"></input><br>
        </form>
    </body>
</html>

