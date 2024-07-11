<?php








ECHO"<H3> THE SCRIPT NAME IS:";
echo basename($_SERVER['SCRIPT_NAME']);
echo "<br><br><br>";
echo date("l jS \of F Y h:i:s A");
echo "<br><br><br>";
echo$_SERVER['REQUEST_TIME'];

echo "<br><br><br>";

$timestamp = $_SERVER['REQUEST_TIME'];


$formattedTime = date('Y-m-d H:i:s', $timestamp);

echo "The request was received at: " . $formattedTime;

echo "<br><br><br>";




?>