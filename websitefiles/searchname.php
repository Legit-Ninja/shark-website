<!DOCTYPE html>
<html lang="en">
<head>
<title>SharkNameAndId</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}
</style>
</head>
<body>
    <h1> the results of your search </h1>
<?php 
$mysqli = new mysqli("canidoanything-instance-1.cifenesy951d.us-west-2.rds.amazonaws.com",  //establish a connection to the database
 "admin", "letmeinn", "sys");      // https://dev.mysql.com/doc/apis-php/en/apis-php-mysqli.quickstart.connections.html
if ($mysqli->connect_errno) {                                           //heavily relied on the mySQL php api
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error; //if failed, let me knwo why
}      
    $sharksname = "{$_POST['enteredname']}";   // how to get info from a  form https://www.homeandlearn.co.uk/php/php4p6.html 
    echo "entered name : " . $sharksname . "\r\n"; 
    $res = $mysqli->query("SELECT *  FROM sharks WHERE sharkname = '{$sharksname}'") or die("error".$mysqli->error);    //runs the query and stores results in $res
    $res->data_seek(0);                                             //moves the cursor to the first results 
while ($row = $res-> fetch_assoc())             //gets all the information in the first row  
{
    echo " shark name: " .$row['sharkname'] . ", shark location: " . $row['sharklocation'] //displays each col by name and the data in it for a particular row
    . ", shark fav food: " . $row['fav_food'] . ", shark size: " .$row['size_in_feet'] . "ft. \r\n";
}

?>
</body>
</html>