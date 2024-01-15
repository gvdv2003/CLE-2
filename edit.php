
<?php


/** @var array $db */
require_once "includes/database.php";



if(!isset($_GET['id'])){
    header('Location: tijdschema.php');
    exit;
}
// check of alles is ingevuld
if (isset($_POST['submit'])) {
    $first_name = mysqli_escape_string($db,$_POST['first_name']);
    $last_name = mysqli_escape_string($db,$_POST['last_name']);
    $persons = mysqli_escape_string($db,$_POST['persons']);
    $date = mysqli_escape_string($db,$_POST['date']);
    $time = mysqli_escape_string($db, $_POST['time']);
    $index = mysqli_escape_string($db, $_POST['id']);

    $errors = [];
    if ($first_name == "") {
        $errors['first_name'] = "vul alsjeblieft je voornaam in";
    }
    if ($last_name == "") {
        $errors['last_name'] = "vul alsjeblieft je achternaam in";
    }
    if ($persons == "") {
        $errors['persons'] = "vul alsjeblieft de hoeveelheid personen in";
    }
    if ($date == "") {
        $errors['date'] = "vul alsjeblieft de datum in";
    }
    if ($time == "") {
        $errors['time'] = "vul alsjeblieft de tijd in ";
    }


    if (empty($errors)) {
        //update database
        $query = "UPDATE reservation SET `first_name` = '$first_name', `last_name` = '$last_name', `persons` = '$persons', `date` = '$date', `time` = '$time' WHERE `reservation`.`id` = '$index'";
        $result = mysqli_query($db, $query);

        if ($result) {
            header('Location: tijdschema.php');
        } else {
            $errors['db'] = mysqli_error($db);
        }
    }
}else if (isset($_GET['id']) && $_GET['id'] !== ''){
    $index = $_GET['id'];


// select de reservation met  de juiste id van de database
    $query = "SELECT * FROM reservation WHERE id = '$index'";
    $result = mysqli_query($db, $query)
    or die('Error '.mysqli_error($db).' with query '.$query);

    if(mysqli_num_rows($result)== 1){
        $reservation = mysqli_fetch_assoc($result);
    }else{
        header('Location: tijdschema.php');
        exit;
    }
    $first_name = $reservation['first_name'];
    $last_name = $reservation['last_name'];
    $persons = $reservation['persons'];
    $date= $reservation['date'];
    $time = $reservation['time'];
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
    <title>re - Create</title>
</head>
<body>
<div class="container px-4">

    <section class="columns is-centered">
        <div class="column is-10">
            <h2 class="title mt-4">Reservering </h2>
            <form class="column is-6" action="" method="post">

                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label" for="Title">voornaam</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <input class="input" id="first_name" type="text" name="first_name" value="<?= htmlentities($first_name) ?>"/>
                            </div>
                            <p class="help is-danger">
                                <?php
                                if (isset($errors['first_name'])) {
                                    echo $errors['first_name'];
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label" for="author">achternaam</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <input class="input" id="last_name" type="text" name="last_name" value="<?= htmlentities( $last_name) ?>"/>
                            </div>
                            <p class="help is-danger">
                                <?php
                                if (isset($errors['last_name'])) {
                                    echo $errors['last_name'];
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label" for="year">personen</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <input class="input" id="persons" type="number" name="persons" value="<?= htmlentities($persons) ?>"/>
                            </div>
                            <p class="help is-danger">
                                <?php
                                if (isset($errors['persons'])) {
                                    echo $errors['persons'];
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label" for="genre">datum</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <input class="input" id="date" type="date" name="date" value="<?= htmlentities($date) ?>"/>
                            </div>
                            <p class="help is-danger">
                                <?php
                                if (isset($errors['date'])) {
                                    echo $errors['date'];
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label" for="pages">time</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <input class="input" id="time" type="time" name="time" value="<?= htmlentities($time) ?>"/>
                            </div>
                            <p class="help is-danger">
                                <?php
                                if (isset($errors['time'])) {
                                    echo $errors['time'];
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>


                <div class="field is-horizontal">
                    <div class="field-label is-normal"></div>
                    <div class="field-body">
                        <input type = "hidden" name = "id" value = "<?= $index ?>" />
                        <button class="button is-link is-fullwidth" type="submit" name="submit">Save</button>
                    </div>
                </div>
            </form>

            <a class="button mt-4" href="tijdschema.php.php">&laquo; terug naar de tijdschema</a>
        </div>
    </section>
</div>
</body>
</html>

