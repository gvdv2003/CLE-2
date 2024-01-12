<?php

/** @var $db */
require_once "includes/database.php";


$first_name = '';
$last_name = '';
$date = '';
$time = '';
$reservation = '';

$currenttime = time();
$currentdate = date("Y-m-d",$currenttime );


if (isset($_POST['submit'])) {
    $first_name = mysqli_escape_string($db, $_POST['first_name']);
    $last_name = mysqli_escape_string($db, $_POST['last_name']);
    $date = mysqli_escape_string($db, $_POST['date']);
    $time = mysqli_escape_string($db, $_POST['time']);


    $errors = [];
    if($first_name == '') {
        $errors['first_name'] = 'dit veld is verplicht.';
    }
    if($last_name == '') {
        $errors['last_name'] = 'dit veld is verplicht.';
    }
    if($date == '') {
        $errors['date'] = 'dit veld is verplicht.';
    }
    if($time == '') {
        $errors['time'] = 'dit veld is verplicht.';
    }

    if (empty($errors)) {
        //INSERT in DB

        $query = "INSERT INTO reservation (first_name, last_name, date, time)
                VALUES ('$first_name', '$last_name', '$date' , '$time')";

        $result = mysqli_query($db, $query);
        // If query succeeded
        if ($result) {
            // Redirect to login page
            $reservation = 'de reservering is voltooid voor '.$date.' om '.$time;
        } else {
            $errors['db'] = mysqli_error($db);
        }
    }


  
       







}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bezoek</title>
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

<main>




    <h2>Reserveer</h2>

    <?= $reservation ?? '' ?>
    <form action="" method="post">
        <label for="first_name">
            Voornaam:
            <input type="text" id="first_name" name="first_name" value="<?= htmlentities($first_name) ?>"/>
            <p class="help is-danger">
                <?= $errors['first_name'] ?? '' ?>
            </p>
        </label>

        <label for="last_name">
            Achternaam:
            <input type="text" id="last_name" name="last_name" value="<?= htmlentities($last_name) ?>"/>
            <p class="help is-danger">
                <?= $errors['last_name'] ?? '' ?>
            </p>
        </label>

        <label for="date">
            Datum:
            <input type="date" id="date" name="date" min=<?= $currentdate ?> value="<?= htmlentities($date) ?>"/>
            <p class="help is-danger">
                <?= $errors['date'] ?? '' ?>
            </p>
        </label>

        <label for="time">
            Tijd:
            <input type="time" id="time" name="time" min=<?= $currentdate ?> value="<?= htmlentities($time) ?>"/>
            <p class="help is-danger">
                <?= $errors['time'] ?? '' ?>
            </p>
        </label>

        <button type="submit" name="submit">submit</button>

    </form

    <p><?= $worked ?? '' ?></p>





</main>

</body>
</html>




