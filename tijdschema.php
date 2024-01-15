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
$date = date("Y-m-d", $currenttime);;

if (isset($_POST['submit'])) {
    $date = mysqli_escape_string($db, $_POST['date']);
}



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
$query12 = "SELECT * FROM reservation WHERE date = '$date' AND time = '12:00'";
$result12 = mysqli_query($db, $query12)
or die('Error '.mysqli_error($db).' with query '.$query12);
$reservationlist12 = [];
while($row12 = mysqli_fetch_assoc($result12))
{ $reservationlist12[] = $row12;
}
//13 uur
$query13 = "SELECT * FROM reservation WHERE date = '$date' AND time = '13:00'";
$result13 = mysqli_query($db, $query13)
or die('Error '.mysqli_error($db).' with query '.$query13);
$reservationlist13 = [];
while($row13 = mysqli_fetch_assoc($result13))
{ $reservationlist13[] = $row13;
}
//14 uur
$query14 = "SELECT * FROM reservation WHERE date = '$date' AND time = '14:00'";
$result14 = mysqli_query($db, $query14)
or die('Error '.mysqli_error($db).' with query '.$query14);
$reservationlist14 = [];
while($row14 = mysqli_fetch_assoc($result14))
{ $reservationlist14[] = $row14;
}
//15 uur
$query15 = "SELECT * FROM reservation WHERE date = '$date' AND time = '15:00'";
$result15 = mysqli_query($db, $query15)
or die('Error '.mysqli_error($db).' with query '.$query15);
$reservationlist15 = [];
while($row15 = mysqli_fetch_assoc($result15))
{ $reservationlist15[] = $row15;
}
//16 uur
$query16 = "SELECT * FROM reservation WHERE date = '$date' AND time = '16:00'";
$result16 = mysqli_query($db, $query16)
or die('Error '.mysqli_error($db).' with query '.$query16);
$reservationlist16 = [];
while($row16 = mysqli_fetch_assoc($result16))
{ $reservationlist16[] = $row16;
}
//17 uur
$query17 = "SELECT * FROM reservation WHERE date = '$date' AND time = '17:00'";
$result17 = mysqli_query($db, $query17)
or die('Error '.mysqli_error($db).' with query '.$query17);
$reservationlist17 = [];
while($row17 = mysqli_fetch_assoc($result17))
{ $reservationlist17[] = $row17;
}
//18 uur
$query18 = "SELECT * FROM reservation WHERE date = '$date' AND time = '18:00'";
$result18 = mysqli_query($db, $query18)
or die('Error '.mysqli_error($db).' with query '.$query18);
$reservationlist18 = [];
while($row18 = mysqli_fetch_assoc($result18))
{ $reservationlist18[] = $row18;
}
//19 uur
$query19 = "SELECT * FROM reservation WHERE date = '$date' AND time = '19:00'";
$result19 = mysqli_query($db, $query19)
or die('Error '.mysqli_error($db).' with query '.$query19);
$reservationlist19 = [];
while($row19 = mysqli_fetch_assoc($result19))
{ $reservationlist19[] = $row19;
}
//20 uur
$query20 = "SELECT * FROM reservation WHERE date = '$date' AND time = '20:00'";
$result20 = mysqli_query($db, $query20)
or die('Error '.mysqli_error($db).' with query '.$query20);
$reservationlist20 = [];
while($row20 = mysqli_fetch_assoc($result20))
{ $reservationlist20[] = $row20;
}
//21 uur
$query21 = "SELECT * FROM reservation WHERE date = '$date' AND time = '21:00'";
$result21 = mysqli_query($db, $query21)
or die('Error '.mysqli_error($db).' with query '.$query21);
$reservationlist21 = [];
while($row21 = mysqli_fetch_assoc($result21))
{ $reservationlist21[] = $row21;
}
//22 uur
$query22 = "SELECT * FROM reservation WHERE date = '$date' AND time = '22:00'";
$result22 = mysqli_query($db, $query22)
or die('Error '.mysqli_error($db).' with query '.$query22);
$reservationlist22 = [];
while($row22 = mysqli_fetch_assoc($result22))
{ $reservationlist22[] = $row22;
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


                    <?php foreach ($reservationlist12 as $index => $reservationondate12) { ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= $reservationondate12['first_name'] ?></td>
                            <td><?= $reservationondate12['last_name'] ?></td>
                            <td><?= $reservationondate12['persons'] ?></td>
                            <td><?= $reservationondate12['date'] ?></td>
                            <td><?= $reservationondate12['time'] ?></td>
                            <td><a href="edit.php?id=<?= htmlentities($reservationondate12['id']) ?>">Edit</a></td>
                            <td><a href="delete.php?id=<?= htmlentities($reservationondate12['id']) ?>">Delete</a></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>

            <button class="collapsible">13:00</button>
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


                    <?php foreach ($reservationlist13 as $index => $reservationondate13) { ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= $reservationondate13['first_name'] ?></td>
                            <td><?= $reservationondate13['last_name'] ?></td>
                            <td><?= $reservationondate13['persons'] ?></td>
                            <td><?= $reservationondate13['date'] ?></td>
                            <td><?= $reservationondate13['time'] ?></td>
                            <td><a href="edit.php?id=<?= htmlentities($reservationondate13['id']) ?>">Edit</a></td>
                            <td><a href="delete.php?id=<?= htmlentities($reservationondate13['id']) ?>">Delete</a></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>


            <button class="collapsible">14:00</button>
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


                    <?php foreach ($reservationlist14 as $index => $reservationondate14) { ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= $reservationondate14['first_name'] ?></td>
                            <td><?= $reservationondate14['last_name'] ?></td>
                            <td><?= $reservationondate14['persons'] ?></td>
                            <td><?= $reservationondate14['date'] ?></td>
                            <td><?= $reservationondate14['time'] ?></td>
                            <td><a href="edit.php?id=<?= htmlentities($reservationondate14['id']) ?>">Edit</a></td>
                            <td><a href="delete.php?id=<?= htmlentities($reservationondate14['id']) ?>">Delete</a></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>


            <button class="collapsible">15:00</button>
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


                    <?php foreach ($reservationlist15 as $index => $reservationondate15) { ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= $reservationondate15['first_name'] ?></td>
                            <td><?= $reservationondate15['last_name'] ?></td>
                            <td><?= $reservationondate15['persons'] ?></td>
                            <td><?= $reservationondate15['date'] ?></td>
                            <td><?= $reservationondate15['time'] ?></td>
                            <td><a href="edit.php?id=<?= htmlentities($reservationondate15['id']) ?>">Edit</a></td>
                            <td><a href="delete.php?id=<?= htmlentities($reservationondate15['id']) ?>">Delete</a></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>


            <button class="collapsible">16:00</button>
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


                    <?php foreach ($reservationlist16 as $index => $reservationondate16) { ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= $reservationondate16['first_name'] ?></td>
                            <td><?= $reservationondate16['last_name'] ?></td>
                            <td><?= $reservationondate16['persons'] ?></td>
                            <td><?= $reservationondate16['date'] ?></td>
                            <td><?= $reservationondate16['time'] ?></td>
                            <td><a href="edit.php?id=<?= htmlentities($reservationondate16['id']) ?>">Edit</a></td>
                            <td><a href="delete.php?id=<?= htmlentities($reservationondate16['id']) ?>">Delete</a></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>

            <button class="collapsible">17:00</button>
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


                    <?php foreach ($reservationlist17 as $index => $reservationondate17) { ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= $reservationondate17['first_name'] ?></td>
                            <td><?= $reservationondate17['last_name'] ?></td>
                            <td><?= $reservationondate17['persons'] ?></td>
                            <td><?= $reservationondate17['date'] ?></td>
                            <td><?= $reservationondate17['time'] ?></td>
                            <td><a href="edit.php?id=<?= htmlentities($reservationondate17['id']) ?>">Edit</a></td>
                            <td><a href="delete.php?id=<?= htmlentities($reservationondate17['id']) ?>">Delete</a></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>

            <button class="collapsible">18:00</button>
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


                    <?php foreach ($reservationlist18 as $index => $reservationondate18) { ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= $reservationondate18['first_name'] ?></td>
                            <td><?= $reservationondate18['last_name'] ?></td>
                            <td><?= $reservationondate18['persons'] ?></td>
                            <td><?= $reservationondate18['date'] ?></td>
                            <td><?= $reservationondate18['time'] ?></td>
                            <td><a href="edit.php?id=<?= htmlentities($reservationondate18['id']) ?>">Edit</a></td>
                            <td><a href="delete.php?id=<?= htmlentities($reservationondate18['id']) ?>">Delete</a></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>

            <button class="collapsible">19:00</button>
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


                    <?php foreach ($reservationlist19 as $index => $reservationondate19) { ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= $reservationondate19['first_name'] ?></td>
                            <td><?= $reservationondate19['last_name'] ?></td>
                            <td><?= $reservationondate19['persons'] ?></td>
                            <td><?= $reservationondate19['date'] ?></td>
                            <td><?= $reservationondate19['time'] ?></td>
                            <td><a href="edit.php?id=<?= htmlentities($reservationondate19['id']) ?>">Edit</a></td>
                            <td><a href="delete.php?id=<?= htmlentities($reservationondate19['id']) ?>">Delete</a></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>

            <button class="collapsible">20:00</button>
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


                    <?php foreach ($reservationlist20 as $index => $reservationondate20) { ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= $reservationondate20['first_name'] ?></td>
                            <td><?= $reservationondate20['last_name'] ?></td>
                            <td><?= $reservationondate20['persons'] ?></td>
                            <td><?= $reservationondate20['date'] ?></td>
                            <td><?= $reservationondate20['time'] ?></td>
                            <td><a href="edit.php?id=<?= htmlentities($reservationondate20['id']) ?>">Edit</a></td>
                            <td><a href="delete.php?id=<?= htmlentities($reservationondate20['id']) ?>">Delete</a></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>

            <button class="collapsible">21:00</button>
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


                    <?php foreach ($reservationlist21 as $index => $reservationondate21) { ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= $reservationondate21['first_name'] ?></td>
                            <td><?= $reservationondate21['last_name'] ?></td>
                            <td><?= $reservationondate21['persons'] ?></td>
                            <td><?= $reservationondate21['date'] ?></td>
                            <td><?= $reservationondate21['time'] ?></td>
                            <td><a href="edit.php?id=<?= htmlentities($reservationondate21['id']) ?>">Edit</a></td>
                            <td><a href="delete.php?id=<?= htmlentities($reservationondate21['id']) ?>">Delete</a></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>

            <button class="collapsible">22:00</button>
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


                    <?php foreach ($reservationlist22 as $index => $reservationondate22) { ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= $reservationondate22['first_name'] ?></td>
                            <td><?= $reservationondate22['last_name'] ?></td>
                            <td><?= $reservationondate22['persons'] ?></td>
                            <td><?= $reservationondate22['date'] ?></td>
                            <td><?= $reservationondate22['time'] ?></td>
                            <td><a href="edit.php?id=<?= htmlentities($reservationondate22['id']) ?>">Edit</a></td>
                            <td><a href="delete.php?id=<?= htmlentities($reservationondate22['id']) ?>">Delete</a></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
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




        </div>
    </div>
</main>
</body>


