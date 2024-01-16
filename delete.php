<?php
/** @var mysqli $db */

session_start();

if (!isset($_SESSION['login'])){
    header('Location: login.php');
}

if(!isset($_GET['id'])){
    header('Location: tijdschema.php');
    exit;
}
$index = $_GET['id'];
// Setup connection with database
require_once 'includes/database.php';

// Select all the albums from the database
$query = "SELECT * FROM reservation WHERE id = '$index'";
$result = mysqli_query($db, $query)
or die('Error '.mysqli_error($db).' with query '.$query);

if(mysqli_num_rows($result)== 1){
    $reservation = mysqli_fetch_assoc($result);
}else{
    header('Location: tijdschema.php');
    exit;
}
if(isset($_POST['submit'])){
    $query = "DELETE FROM reservation WHERE id ='$index'";
    $result = mysqli_query($db, $query);

    if ($result) {
        header('Location: tijdschema.php');
    } else {
        $errors['db'] = mysqli_error($db);
    }
}

mysqli_close($db);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title> details reservering </title>
</head>
<body>
<div class="container px-4">
    <div class="columns is-centered">
        <div class="column is-narrlast_nameow">
            <h2 class="title mt-4"><?= $reservation['first_name'].' '.$reservation['last_name']?></h2>
            <section class="content">
                <ul>
                    <li>voornaam: <?= $reservation['first_name']?></li>
                    <li>achternaam: <?= $reservation['last_name']?></li>
                    <li>personen: <?= $reservation['persons']?></li>
                    <li>datum: <?= $reservation['date']?></li>
                    <li>tijd: <?= $reservation['time']?></li>
                </ul>
            </section>
            <form class="column is-6" action="" method="post">
                <div class="field is-horizontal">
                    <div class="field-label is-normal"></div>
                    <div class="field-body">
                        <input type = "hidden" name = "id" value = "<?= htmlentities($index)?>" />
                        <button class="button is-link is-fullwidth" type="submit" name="submit">Delete</button>
                    </div>
                </div>
            </form>
            <div>
                <a class="button" href="tijdschema.php">Go back to the list</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>

