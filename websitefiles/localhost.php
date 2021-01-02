<!DOCTYPE html>   <!-- defines formatting for the html page -->
<html lang="en">
<head>
<title>Learn About Sharks!</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}
</style>
</head>
<body>

<h1>Learn about sharks!</h1> <!-- displays the header fot eh website -->
<p>A website created by Ben Greenwood.</p>
<h2> click me for shark names and ids </p>
<form action = "nameandId.php" method = "get"> <!-- creates a form for when button labeled "go" is hit to run the nameandId script-->
  <input type = "submit" value = "all names and ids!"> <!-- press this button to run the form -->
</form>
<h3> here you can search up any shark name and get their information! </h3>
<form action = "searchname.php" method = "post"> <!-- creats a form with a text box caled enteredname whose value is sent to -->
"enter shark name here: "                         <!-- the searchname.php script to runa  query on the user's input -->
<input type = "text" name = "enteredname" size = "100">
<input type = "submit" value = "search!">     <!-- press this button to run the form -->
</form>
<h4> Click this button for all the info i have on sharks! </h4>
<form action = "allsharkinfo.php" method = "get"> <!-- creates a form for running the allsharkinfo script-->
  <input type = "submit" value = "go!"> <!-- press this button to run the form -->
</body>
</html>