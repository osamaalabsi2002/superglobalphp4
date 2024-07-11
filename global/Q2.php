
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Search Engine</title>
</head>
<body>
  <h1>Simple Search Engine</h1>
  <form  method="get">
    <label for="url">Enter URL:</label>
    <input type="url" name="url" id="url" required placeholder="https://www.example.com">
    <button type="submit">GO</button>
  </form>
</body>
</html>

<?php




$url=$_GET["url"];
header("location:$url");

?>