<?php


session_start();

//May I visit this page? Check the SESSION
if(!isset($_SESSION['login'])) {
    $_SESSION['error'] = "Je moet ingelogd zijn";
    header('Location: login.php');
}
/** @var array $db */
require_once "includes/database.php";

$date= '';

$date = mysqli_escape_string($db, $_POST['date']);

$query = "SELECT * FROM reservation WHERE date = '$date'";



$result = mysqli_query($db, $query)
or die('Error '.mysqli_error($db).' with query '.$query);


$reservationlist = [];

while($row = mysqli_fetch_assoc($result))
{ $reservationlist[] = $row;
}




// Close the connection
mysqli_close($db);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

<nav>
    <a href="home.php">Home</a>
    <a href="actueel.php">actueel</a>
    <a href="bezoek.php">bezoek</a>
    <a href="trainingen.php">trainingen</a>
    <a href="info.php">info</a>

    <a href="login.php">medewerker</a>
    <a href="sign_up.php">medewerker toevoegen als admin</a>
</nav>

<main>



    <h1>Tijdschema</h1>


    <div class="columns is-centered">
        <div class="column is-narrow">


            <form action="" method="post">

                <label for="date">
                Datum:
                <input type="date" id="date" name="date"  value="<?= htmlentities($date) ?>"/>
                <p class="help is-danger">
                    <?= $errors['date'] ?? '' ?>
                </p>
                </label>


                <button type="submit" name="submit">submit</button>


            </form>

            <table class="table is-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>voornaam</th>
                    <th>achternaam</th>
                    <th>personen</th>
                    <th>datum</th>
                    <th>tijd</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <td colspan="9" class="has-text-centered">&copy; My Collection</td>
                </tr>
                </tfoot>
                <tbody>


                <?php foreach ($reservationlist as $index => $reservationondate) { ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= $reservationondate['first_name'] ?></td>
                        <td><?= $reservationondate['last_name'] ?></td>
                        <td><?= $reservationondate['persons'] ?></td>
                        <td><?= $reservationondate['date'] ?></td>
                        <td><?= $reservationondate['time'] ?></td>
                        <td><a href="edit.php?id=<?= htmlentities($reservationondate['id']) ?>">Edit</a></td>
                        <td><a href="delete.php?id=<?= htmlentities($reservationondate['id']) ?>">Delete</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
</body>


