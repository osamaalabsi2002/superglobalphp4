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

    <input type="number" name="num1"  required placeholder="write a password">
    <input type="number" name="num2"  required placeholder="write a password">
    <input type="text" name="op"  required placeholder="write a password">

    <button type="submit">GO</button>
  </form>
</body>
</html>


<?php

$num1=$_POST["num1"];
$num2=$_POST["num2"];
$op=$_POST["op"];

switch($op){
  case("*"):
    $result=$num1*$num2;
    echo $result;
  break;
  case("+"):
    $result=$num1+$num2;
    echo $result;
    break;
  case("/"):
    $result=$num1/$num2;
    echo $result;
    break;
  case("-"):
    $result=$num1-$num2;
    echo $result;
  
}

?>