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
<h1> All the information on sharks! (may not be accurate) <h1> 

<?php
$mysqli = new mysqli("canidoanything-instance-1.cifenesy951d.us-west-2.rds.amazonaws.com", //establish a connection to the database
 "admin", "letmeinn", "sys");      // https://dev.mysql.com/doc/apis-php/en/apis-php-mysqli.quickstart.connections.html
if ($mysqli->connect_errno) {                                           //heavily relied on the mySQL php api
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;//if failed, let me knwo why
}                                   // for the button https://stackoverflow.com/questions/4324315/how-to-create-a-button-and-its-event-handler-in-php
//echo $mysqli->host_info . "\n"; //used to cheeck the connection when debugging
$res = $mysqli->query("SELECT * FROM sharks")or die("error".$mysqli->error);    //runs the query and stores results in $res;  
$res->data_seek(0); //sets the cursor to the start of results 
while ($row = $res-> fetch_assoc()) //fetch_assoc gets a row of each of the results and assocaites them with their attribute names 
{
    echo "shark name: " .$row['sharkname'] . "shark location: " . $row['sharklocation'] //displays the data by attribute
     . "shark fav food: " . $row['fav_food'] . "shark size: " .$row['size_in_feet'] . "ft. \r\n";
}
?>
</body>
</html>