<?php
    $dsn = "mysql:dbname=marathons; charset=utf8";
    $username = "root";
    $password = "";
    try {
        $conn = new PDO($dsn, $username, $password);
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    }

    catch (PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
?>


<!DOCTYPE html>
<html lang="en">  <head>
<title>First Bootstrap Example</title> <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
</script>
</head>
<body>

<nav class ="navbar navbar-default">
<div class ="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">Our Website</a>
    </div>
    <div>
        <ul class="nav navbar-nav">
            <li clas="active"><a href="index.php">Home</a></li>
            <li clas="active"><a href="times.php">Member Times</a></li>
            <li clas="active"><a href="averages.php">Average Times</a></li>
        </ul>
    </div>
    </div>
    </nav>    
    
</body></html>