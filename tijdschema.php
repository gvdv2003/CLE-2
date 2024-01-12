<?php


session_start();

//May I visit this page? Check the SESSION
if(!isset($_SESSION['login'])) {
    $_SESSION['error'] = "Je moet ingelogd zijn";
    header('Location: login.php');
}
/** @var array $db */
require_once "includes/database.php";

$currenttime = time();
$date= date("Y-m-d",$currenttime );;

$date = mysqli_escape_string($db, $_POST['date']);

//10 uur
$query10 = "SELECT * FROM reservation WHERE date = '$date' AND time = '10:00'";
$result10 = mysqli_query($db, $query10)
or die('Error '.mysqli_error($db).' with query '.$query10);
$reservationlist10 = [];
while($row10 = mysqli_fetch_assoc($result10))
{ $reservationlist10[] = $row10;
}

//11 uur
$query11 = "SELECT * FROM reservation WHERE date = '$date' AND time = '11:00'";
$result11 = mysqli_query($db, $query11)
or die('Error '.mysqli_error($db).' with query '.$query11);
$reservationlist11 = [];
while($row11 = mysqli_fetch_assoc($result11))
{ $reservationlist11[] = $row11;
}
//12 uur



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
<header>
    <nav>
        <a href="home.php">Home</a>
        <a href="actueel.php">actueel</a>
        <a href="bezoek.php">bezoek</a>
        <a href="trainingen.php">trainingen</a>
        <a href="info.php">info</a>

        <a href="login.php">medewerker</a>
        <a href="sign_up.php">medewerker toevoegen als admin</a>
    </nav>


</header>
<body>



<main>



    <h1>Tijdschema</h1>


    <div>
        <div>


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

            <style>
                .collapsible {
                    background-color: #777;
                    color: white;
                    cursor: pointer;
                    padding: 18px;
                    width: 100%;
                    border: none;
                    text-align: left;
                    outline: none;
                    font-size: 15px;
                }

                .active, .collapsible:hover {
                    background-color: #555;
                }

                .content {
                    padding: 0 18px;
                    max-height: 0;
                    overflow: hidden;
                    transition: max-height 0.2s ease-out;
                    background-color: #f1f1f1;
                }
            </style>

            <p>reserveringen voor <?= $date ?></p>
            <button class="collapsible">10:00</button>
            <div class="content">
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
                        <td colspan="8" class="has-text-centered"></td>
                    </tr>
                    </tfoot>
                    <tbody>


                    <?php foreach ($reservationlist10 as $index => $reservationondate10) { ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= $reservationondate10['first_name'] ?></td>
                            <td><?= $reservationondate10['last_name'] ?></td>
                            <td><?= $reservationondate10['persons'] ?></td>
                            <td><?= $reservationondate10['date'] ?></td>
                            <td><?= $reservationondate10['time'] ?></td>
                            <td><a href="edit.php?id=<?= htmlentities($reservationondate10['id']) ?>">Edit</a></td>
                            <td><a href="delete.php?id=<?= htmlentities($reservationondate10['id']) ?>">Delete</a></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <button class="collapsible">11:00</button>
            <div class="content">
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
                        <td colspan="8" class="has-text-centered"></td>
                    </tr>
                    </tfoot>
                    <tbody>


                    <?php foreach ($reservationlist11 as $index => $reservationondate11) { ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= $reservationondate11['first_name'] ?></td>
                            <td><?= $reservationondate11['last_name'] ?></td>
                            <td><?= $reservationondate11['persons'] ?></td>
                            <td><?= $reservationondate11['date'] ?></td>
                            <td><?= $reservationondate11['time'] ?></td>
                            <td><a href="edit.php?id=<?= htmlentities($reservationondate11['id']) ?>">Edit</a></td>
                            <td><a href="delete.php?id=<?= htmlentities($reservationondate11['id']) ?>">Delete</a></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <button class="collapsible">12:00</button>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button class="collapsible">12:00</button>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>


            <button class="collapsible">12:00</button>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>


            <button class="collapsible">12:00</button>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>


            <button class="collapsible">12:00</button>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <script>
                var coll = document.getElementsByClassName("collapsible");
                var i;

                for (i = 0; i < coll.length; i++) {
                    coll[i].addEventListener("click", function() {
                        this.classList.toggle("active");
                        var content = this.nextElementSibling;
                        if (content.style.maxHeight){
                            content.style.maxHeight = null;
                        } else {
                            content.style.maxHeight = content.scrollHeight + "px";
                        }
                    });
                }
            </script>



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


                <?php foreach ($reservationlist10 as $index => $reservationondate) { ?>
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


