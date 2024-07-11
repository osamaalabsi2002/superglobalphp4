<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>

</body>
</html>


<?php
if (isset($_GET['pwd'])) {
    $dataMethod = 'GET';
    $password = $_GET['pwd'];
  } elseif (isset($_POST['pwd'])) {
    $dataMethod = 'POST';
    $password = $_POST['pwd'];
  } else {
    $dataMethod = 'Not received';
    $password = 'Password not provided';
  }
  
  echo "DATA RECIVED VIA " . strtoupper($dataMethod); 
  echo "the password is " . $password;

?>