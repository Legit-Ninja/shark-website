<!DOCTYPE html>
<html lang="en">
<head>
<title>search by name</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}
</style>
</head>
<body>
  <h1> "Hi! here are the sharks and their ids" </h1>  <!--displays text for the page header-->
<?php 
$mysqli = new mysqli("canidoanything-instance-1.cifenesy951d.us-west-2.rds.amazonaws.com", //establish a connection to the database
 "admin", "letmeinn", "sys");      // https://dev.mysql.com/doc/apis-php/en/apis-php-mysqli.quickstart.connections.html
if ($mysqli->connect_errno) {                                           //heavily relied on the mySQL php api
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error; //if failed, let me knwo why
}        
$res = $mysqli->query("SELECT idsharks, sharkname  FROM sharks");   //runs the query and stores results in $res
$res->data_seek(0);
while ($row = $res-> fetch_assoc())
{
    echo "shark id: " . $row['idsharks'] . " shark name: " .$row['sharkname'] . "\r\n";
}
?>
</body>
</html>