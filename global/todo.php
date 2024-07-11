<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
  <h1>Q1</h1>
  <form  method="post">

    <input type="text" name="text"  required placeholder="write a password">
    <button type="submit">GO</button>
  </form>
</body>
</html>


<?php

session_start();

if(!isset($_SESSION['text'])){
    $_SESSION['text']=[];
}else{
    $osama=$_POST['text'];
    $_SESSION['text'][]=$osama;
    foreach($_SESSION['text'] as $x){
        echo"<ul>    <li> $x</li> </ul>";

    }

}


  


?>