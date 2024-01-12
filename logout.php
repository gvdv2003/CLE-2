<?php
// Start the session.
session_start();
// destroy the session.
session_unset();
session_destroy();
// Redirect to login page

// Exit the code.
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>logout</title>
</head>
<body>

<nav>
    <a href="home.php">Home</a>
    <a href="actueel.php">actueel</a>
    <a href="bezoek.php">bezoek</a>
    <a href="trainingen.php">trainingen</a>
    <a href="info.php">info</a>

    <a href="login.php">medewerker</a>

</nav>


<h1>je bent uitgelogd</h1>
<a href="home.php">ga terug naar home.</a>
<p>   </p>
<a href="login.php"> opnieuw inloggen.</a>
