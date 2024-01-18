<?php


session_start();

//May I visit this page? Check the SESSION
if (!isset($_SESSION['login'])) {
    $_SESSION['error'] = "Je moet ingelogd zijn";
    header('Location: login.php');
}
/** @var array $db */
require_once "includes/database.php";

$currenttime = time();
$date = date("Y-m-d", $currenttime);
;

if (isset($_POST['submit'])) {
    $date = mysqli_escape_string($db, $_POST['date']);
}



//10 uur
$query10 = "SELECT * FROM reservation WHERE date = '$date' AND time = '10:00'";
$result10 = mysqli_query($db, $query10)
    or die('Error ' . mysqli_error($db) . ' with query ' . $query10);
$reservationlist10 = [];
while ($row10 = mysqli_fetch_assoc($result10)) {
    $reservationlist10[] = $row10;
}

//11 uur
$query11 = "SELECT * FROM reservation WHERE date = '$date' AND time = '11:00'";
$result11 = mysqli_query($db, $query11)
    or die('Error ' . mysqli_error($db) . ' with query ' . $query11);
$reservationlist11 = [];
while ($row11 = mysqli_fetch_assoc($result11)) {
    $reservationlist11[] = $row11;
}
//12 uur
$query12 = "SELECT * FROM reservation WHERE date = '$date' AND time = '12:00'";
$result12 = mysqli_query($db, $query12)
    or die('Error ' . mysqli_error($db) . ' with query ' . $query12);
$reservationlist12 = [];
while ($row12 = mysqli_fetch_assoc($result12)) {
    $reservationlist12[] = $row12;
}
//13 uur
$query13 = "SELECT * FROM reservation WHERE date = '$date' AND time = '13:00'";
$result13 = mysqli_query($db, $query13)
    or die('Error ' . mysqli_error($db) . ' with query ' . $query13);
$reservationlist13 = [];
while ($row13 = mysqli_fetch_assoc($result13)) {
    $reservationlist13[] = $row13;
}
//14 uur
$query14 = "SELECT * FROM reservation WHERE date = '$date' AND time = '14:00'";
$result14 = mysqli_query($db, $query14)
    or die('Error ' . mysqli_error($db) . ' with query ' . $query14);
$reservationlist14 = [];
while ($row14 = mysqli_fetch_assoc($result14)) {
    $reservationlist14[] = $row14;
}
//15 uur
$query15 = "SELECT * FROM reservation WHERE date = '$date' AND time = '15:00'";
$result15 = mysqli_query($db, $query15)
    or die('Error ' . mysqli_error($db) . ' with query ' . $query15);
$reservationlist15 = [];
while ($row15 = mysqli_fetch_assoc($result15)) {
    $reservationlist15[] = $row15;
}
//16 uur
$query16 = "SELECT * FROM reservation WHERE date = '$date' AND time = '16:00'";
$result16 = mysqli_query($db, $query16)
    or die('Error ' . mysqli_error($db) . ' with query ' . $query16);
$reservationlist16 = [];
while ($row16 = mysqli_fetch_assoc($result16)) {
    $reservationlist16[] = $row16;
}
//17 uur
$query17 = "SELECT * FROM reservation WHERE date = '$date' AND time = '17:00'";
$result17 = mysqli_query($db, $query17)
    or die('Error ' . mysqli_error($db) . ' with query ' . $query17);
$reservationlist17 = [];
while ($row17 = mysqli_fetch_assoc($result17)) {
    $reservationlist17[] = $row17;
}
//18 uur
$query18 = "SELECT * FROM reservation WHERE date = '$date' AND time = '18:00'";
$result18 = mysqli_query($db, $query18)
    or die('Error ' . mysqli_error($db) . ' with query ' . $query18);
$reservationlist18 = [];
while ($row18 = mysqli_fetch_assoc($result18)) {
    $reservationlist18[] = $row18;
}
//19 uur
$query19 = "SELECT * FROM reservation WHERE date = '$date' AND time = '19:00'";
$result19 = mysqli_query($db, $query19)
    or die('Error ' . mysqli_error($db) . ' with query ' . $query19);
$reservationlist19 = [];
while ($row19 = mysqli_fetch_assoc($result19)) {
    $reservationlist19[] = $row19;
}
//20 uur
$query20 = "SELECT * FROM reservation WHERE date = '$date' AND time = '20:00'";
$result20 = mysqli_query($db, $query20)
    or die('Error ' . mysqli_error($db) . ' with query ' . $query20);
$reservationlist20 = [];
while ($row20 = mysqli_fetch_assoc($result20)) {
    $reservationlist20[] = $row20;
}
//21 uur
$query21 = "SELECT * FROM reservation WHERE date = '$date' AND time = '21:00'";
$result21 = mysqli_query($db, $query21)
    or die('Error ' . mysqli_error($db) . ' with query ' . $query21);
$reservationlist21 = [];
while ($row21 = mysqli_fetch_assoc($result21)) {
    $reservationlist21[] = $row21;
}
//22 uur
$query22 = "SELECT * FROM reservation WHERE date = '$date' AND time = '22:00'";
$result22 = mysqli_query($db, $query22)
    or die('Error ' . mysqli_error($db) . ' with query ' . $query22);
$reservationlist22 = [];
while ($row22 = mysqli_fetch_assoc($result22)) {
    $reservationlist22[] = $row22;
}

$totalg10 = 0;
$totalp10 = 0;
foreach ($reservationlist10 as $index10 => $person10) {
    $totalp10 = $totalp10 + $person10['persons'];
    $totalg10++;
}
$totalg11 = 0;
$totalp11 = 0;
foreach ($reservationlist11 as $index11 => $person11) {
    $totalp11 = $totalp11 + $person11['persons'];
    $totalg11++;
}
$totalg12 = 0;
$totalp12 = 0;
foreach ($reservationlist12 as $index12 => $person12) {
    $totalp12 = $totalp12 + $person12['persons'];
    $totalg12++;
}
$totalg13 = 0;
$totalp13 = 0;
foreach ($reservationlist13 as $index13 => $person13) {
    $totalp13 = $totalp13 + $person13['persons'];
    $totalg13++;
}
$totalg14 = 0;
$totalp14 = 0;
foreach ($reservationlist14 as $index14 => $person14) {
    $totalp14 = $totalp14 + $person14['persons'];
    $totalg14++;
}
$totalg15 = 0;
$totalp15 = 0;
foreach ($reservationlist15 as $index15 => $person15) {
    $totalp15 = $totalp15 + $person15['persons'];
    $totalg15++;
}
$totalg16 = 0;
$totalp16 = 0;
foreach ($reservationlist16 as $index16 => $person16) {
    $totalp16 = $totalp16 + $person16['persons'];
    $totalg16++;
}
$totalg17 = 0;
$totalp17 = 0;
foreach ($reservationlist17 as $index17 => $person17) {
    $totalp17 = $totalp17 + $person17['persons'];
    $totalg17++;
}
$totalg18 = 0;
$totalp18 = 0;
foreach ($reservationlist18 as $index18 => $person18) {
    $totalp18 = $totalp18 + $person18['persons'];
    $totalg18++;
}
$totalg19 = 0;
$totalp19 = 0;
foreach ($reservationlist19 as $index19 => $person19) {
    $totalp19 = $totalp19 + $person19['persons'];
    $totalg19++;
}
$totalg20 = 0;
$totalp20 = 0;
foreach ($reservationlist20 as $index20 => $person20) {
    $totalp20 = $totalp20 + $person20['persons'];
    $totalg20++;
}
$totalg21 = 0;
$totalp21 = 0;
foreach ($reservationlist21 as $index21 => $person21) {
    $totalp21 = $totalp21 + $person21['persons'];
    $totalg21++;
}
$totalg22 = 0;
$totalp22 = 0;
foreach ($reservationlist22 as $index22 => $person22) {
    $totalp22 = $totalp22 + $person22['persons'];
    $totalg22++;
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
    <title>Tijdschema</title>
</head>





<body>












<div class=container>
    <nav class=sidenav>
        <svg class=logo id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 187.39 42.28"><defs><style>.cls-1,.cls-2,.cls-3{fill:none;stroke-width:2px;}.cls-1{stroke:#978d65;}.cls-2{stroke:#88552c;}.cls-3{stroke:#2d5391;}.cls-4{fill:#f18f00;}.cls-5{fill:#3c8aca;}.cls-6{fill:#f2f2f2;}.cls-7{fill:#1e1b58;}</style></defs><title>logo</title><path class="cls-1" d="M175.7,6.2l-5.9,2.88" transform="translate(-4.68 -1.26)"/><path class="cls-2" d="M166.52,10.7l-8.15,2.86" transform="translate(-4.68 -1.26)"/><path class="cls-3" d="M172.62,12.84a6.47,6.47,0,0,1-2.84-1.9" transform="translate(-4.68 -1.26)"/><path class="cls-1" d="M178,8.27l3.21,8.07" transform="translate(-4.68 -1.26)"/><path class="cls-2" d="M180.26,18.65l-5.81,1.55" transform="translate(-4.68 -1.26)"/><path class="cls-3" d="M187.73,25.37l-4.68-6" transform="translate(-4.68 -1.26)"/><path class="cls-1" d="M166.38,18,162,23.29" transform="translate(-4.68 -1.26)"/><path class="cls-2" d="M159.17,24.73l-9.54-2" transform="translate(-4.68 -1.26)"/><path class="cls-3" d="M167.36,36.09l-5.7-9.79" transform="translate(-4.68 -1.26)"/><path class="cls-1" d="M174.27,23.57l.85,7.06" transform="translate(-4.68 -1.26)"/><path class="cls-2" d="M174.94,34.13l-3.37,9" transform="translate(-4.68 -1.26)"/><path class="cls-3" d="M185.58,29.09c-.25-.21-.44-.28-.58-.2a28.8,28.8,0,0,1-7.78,2.89" transform="translate(-4.68 -1.26)"/><path class="cls-4" d="M175.7,6.2l-5.9,2.88c-1.52-1.68-3.63-.71-3.28,1.62l-8.15,2.86L170.51,1.37a.37.37,0,0,1,.53,0h0Z" transform="translate(-4.68 -1.26)"/><path class="cls-5" d="M175.7,6.2l-3.08,6.64a6.47,6.47,0,0,1-2.84-1.9l0-1.86Z" transform="translate(-4.68 -1.26)"/><path class="cls-6" d="M15.93,14.51a3.93,3.93,0,0,0-3.84,3.6C12,20.84,12,23.67,12,26.62a4,4,0,0,0,4,3.87H32.22a.32.32,0,0,1,.36.36l0,6.39a.44.44,0,0,1-.51.5q-6.27-.16-12.93,0A18.08,18.08,0,0,1,11.4,36.7c-5.27-2.41-7-7.34-6.69-12.92.17-3.08-.37-6.11.74-9,2.24-5.91,7.07-7.68,13.26-7.51q6.76.18,13.37,0a.42.42,0,0,1,.49.48v6.48a.32.32,0,0,1-.32.32H15.93Z" transform="translate(-4.68 -1.26)"/><path class="cls-6" d="M63.07,30.49a.38.38,0,0,0,.37-.37V7.92a.56.56,0,0,1,.64-.64h6.13a.37.37,0,0,1,.42.42V37.35a.33.33,0,0,1-.33.33h0q-8,0-16.29.07-5.22,0-7.72-1.3c-4.18-2.28-6.1-6.25-6.05-11.12q.08-9.22,0-17.54a.44.44,0,0,1,.5-.5H47a.47.47,0,0,1,.47.47h0V25.87q0,4.62,4.63,4.62Z" transform="translate(-4.68 -1.26)"/><path class="cls-6" d="M106.48,23C110.74,30,106,37.76,98,37.72q-9.3-.06-19.6,0a.6.6,0,0,1-.69-.68V8a.59.59,0,0,1,.67-.67q10.55,0,20.26,0c7.84,0,11.75,8.4,7.81,14.75A.88.88,0,0,0,106.48,23ZM84.89,14.86l0,3.7a.32.32,0,0,0,.32.32l13.3-.07a2.17,2.17,0,0,0,2.29-2v-.32a2.17,2.17,0,0,0-2.31-2h0l-13.3.07A.32.32,0,0,0,84.89,14.86Zm0,11.53v3.84a.25.25,0,0,0,.25.25l13.4,0a2.14,2.14,0,0,0,2.25-2h0v-.32a2.14,2.14,0,0,0-2.25-2l-13.4,0A.25.25,0,0,0,84.92,26.39Z" transform="translate(-4.68 -1.26)"/><path class="cls-6" d="M121.74,14.51a.22.22,0,0,0-.25.25v3.85a.23.23,0,0,0,.23.23h0l16.06,0a.42.42,0,0,1,.48.48v6.52a.3.3,0,0,1-.34.34H122.78c-1.44,0-1.78.61-1,1.82l.45.72a3.6,3.6,0,0,0,3.23,1.79h18.43a.34.34,0,0,1,.38.38v6.42a.4.4,0,0,1-.47.45q-7.72-.16-15.45,0-5.3.13-8.14-1.4c-4.19-2.25-6-6.37-6-11.15q.11-9.57,0-17.62a.31.31,0,0,1,.31-.31h29.21a.42.42,0,0,1,.48.48v6.36a.34.34,0,0,1-.38.38Z" transform="translate(-4.68 -1.26)"/><path class="cls-4" d="M178,8.27l3.21,8.07a1.9,1.9,0,0,0-.91,2.31l-5.81,1.55c-.49-.18-.94-.85-1.36-2a1.08,1.08,0,0,1,.07-.91Z" transform="translate(-4.68 -1.26)"/><path class="cls-5" d="M178,8.27l14,13.89a.33.33,0,0,1,0,.52l-2.8,2.79a.91.91,0,0,1-.91.25c-.33-.09-.5-.2-.5-.35l-4.68-6c.63-.94.88-2.31-.3-2.92a2,2,0,0,0-1.58-.12Z" transform="translate(-4.68 -1.26)"/><path class="cls-7" d="M166.52,10.7a2,2,0,0,0,3.26.24,6.47,6.47,0,0,0,2.84,1.9q-3.85,1.7-5.87,1.55c-2.25-.17-5-.44-8.38-.83Z" transform="translate(-4.68 -1.26)"/><path class="cls-4" d="M166.38,18,162,23.29c-1.78-.56-2.74-.08-2.87,1.44l-9.54-2,5.93-6.28a.88.88,0,0,1,.85-.28Z" transform="translate(-4.68 -1.26)"/><path class="cls-5" d="M166.38,18a71.48,71.48,0,0,1,1,18.12l-5.7-9.79a2,2,0,0,0,.38-3Z" transform="translate(-4.68 -1.26)"/><path class="cls-7" d="M180.26,18.65a2,2,0,0,0,2.79.73l4.68,6c-3.21-1.47-6.11-3.44-9.46-4.23l-3.82-.94Z" transform="translate(-4.68 -1.26)"/><path class="cls-7" d="M149.63,22.73l9.54,2a1.71,1.71,0,0,0,2.49,1.57l5.7,9.79a3,3,0,0,1-1,2.54.47.47,0,0,1-.73,0Z" transform="translate(-4.68 -1.26)"/><path class="cls-4" d="M174.27,23.57l.85,7.06c-1.85,1.11-1.91,2.27-.18,3.5l-3.37,9q-.28.71-1.26.24a.73.73,0,0,1-.42-.67l-.21-12.29a1.86,1.86,0,0,1,.28-1l3.42-5.5a.63.63,0,0,1,.54-.32A1,1,0,0,1,174.27,23.57Z" transform="translate(-4.68 -1.26)"/><path class="cls-5" d="M174.27,23.57l11.26,4.91a.28.28,0,0,1,.17.33.57.57,0,0,1-.12.28c-.25-.21-.44-.28-.58-.2a28.8,28.8,0,0,1-7.78,2.89,2.26,2.26,0,0,0-2.1-1.15Z" transform="translate(-4.68 -1.26)"/><path class="cls-7" d="M185.58,29.09l-14,14,3.37-9a2.1,2.1,0,0,0,2-.67,1.79,1.79,0,0,0,.28-1.68A28.8,28.8,0,0,0,185,28.89C185.14,28.81,185.33,28.88,185.58,29.09Z" transform="translate(-4.68 -1.26)"/></svg>
        <p><i>Medewerker weergave</i></p>

        <div class=sidenavContainer>
            <section>

            
                <a href="home.php" class="navlinks">
                    <div>Home</div>
                </a>
             
                <a href="tijdschema.php" class="navlinks">
                    <div>Tijdschema</div>
                </a>

                <a href="medewerkeroverview.php" class="navlinks">
                    <div>Medewerker overview</div>
                </a>
             
                <a href="sign_up.php" class="navlinks">
                    <div>Medewerker toevoegen</div>
                </a>


  
               
            </section>
            <section class=login>

                
                <a href="logout.php"><svg width="95" height="90" viewBox="0 0 95 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M44.7541 8H46.2655C52.5458 8.14939 58.3163 9.64477 63.577 12.4862C68.227 14.9977 72.1623 18.2416 75.3826 22.2179C80.8819 29.0076 83.7544 36.8539 84 45.7571V47.2655C83.7945 54.9464 81.5727 61.91 77.3347 68.1562C74.1915 72.7898 69.955 76.7601 65.2012 79.595C59.4342 83.0339 53.1158 84.8356 46.2459 85H44.7345C38.4251 84.8496 32.6306 83.3412 27.3509 80.4747C22.7309 77.9672 18.8197 74.7363 15.6174 70.7821C10.1191 63.9924 7.24664 56.1466 7 47.2444V45.736C7.16844 38.8311 8.99017 32.4851 12.4652 26.6981C15.2895 21.9938 19.2313 17.7979 23.8227 14.6788C30.0799 10.4278 37.0571 8.20152 44.7541 8ZM47.2536 20.7426C53.0331 21.3517 58.1403 25.1415 60.4022 30.512C61.5572 33.2531 61.9347 36.0834 61.5346 39.003C61.0003 42.9022 59.2292 46.2208 56.2213 48.9589C55.7351 49.401 55.2127 49.8041 54.6543 50.168C54.643 50.1756 54.634 50.1861 54.6282 50.1984C54.6224 50.2107 54.62 50.2243 54.6214 50.2377C54.6228 50.2511 54.6279 50.2637 54.6361 50.2743C54.6443 50.2848 54.6553 50.2928 54.6678 50.2974C62.8957 53.3804 68.9655 60.178 71.1506 68.6811C71.1519 68.6859 71.1544 68.6903 71.1579 68.6938C71.1614 68.6973 71.1657 68.6998 71.1703 68.7011C71.175 68.7023 71.1798 68.7022 71.1843 68.7008C71.1888 68.6994 71.1927 68.6968 71.1957 68.6931C74.4763 64.8812 76.8133 60.5525 78.207 55.7069C78.3203 55.3139 78.5072 54.5344 78.7679 53.3683C78.9709 52.4645 79.0792 51.5501 79.2071 50.6463C79.2983 49.9996 79.3589 49.3474 79.389 48.6897C79.4326 47.7212 79.5003 46.7271 79.4778 45.7616C79.0356 27.2906 63.9364 12.4892 45.4188 12.5192C26.1327 12.5508 10.5176 28.8817 11.5749 48.1979C11.995 55.8819 14.7351 62.7156 19.7952 68.6992C19.7982 68.703 19.8023 68.7059 19.8069 68.7075C19.8115 68.7091 19.8164 68.7094 19.8211 68.7083C19.8259 68.7072 19.8302 68.7047 19.8336 68.7012C19.837 68.6978 19.8393 68.6934 19.8404 68.6886C21.1848 63.5162 23.7821 59.1664 27.6321 55.6392C30.2048 53.2831 33.1168 51.508 36.3683 50.3139C36.3782 50.3101 36.3868 50.3038 36.3934 50.2955C36.3999 50.2872 36.4041 50.2773 36.4055 50.2668C36.4069 50.2563 36.4054 50.2457 36.4013 50.236C36.3971 50.2262 36.3904 50.2178 36.3818 50.2116C33.5063 48.1904 31.4761 45.5786 30.291 42.3763C28.8879 38.5879 29.0097 34.3229 30.5421 30.6518C33.3154 24.0076 40.0468 19.9831 47.2536 20.7426ZM57.1823 36.8374C57.1823 35.3033 56.8802 33.7841 56.2931 32.3668C55.706 30.9494 54.8455 29.6615 53.7607 28.5767C52.6759 27.4919 51.388 26.6314 49.9706 26.0443C48.5533 25.4572 47.0341 25.1551 45.5 25.1551C42.4016 25.1551 39.4302 26.3859 37.2393 28.5767C35.0485 30.7676 33.8177 33.7391 33.8177 36.8374C33.8177 39.9358 35.0485 42.9072 37.2393 45.0981C39.4302 47.2889 42.4016 48.5197 45.5 48.5197C47.0341 48.5197 48.5533 48.2176 49.9706 47.6305C51.388 47.0434 52.6759 46.1829 53.7607 45.0981C54.8455 44.0133 55.706 42.7254 56.2931 41.308C56.8802 39.8907 57.1823 38.3715 57.1823 36.8374ZM28.2051 61.6834C25.7672 64.771 24.2002 68.5638 23.7355 72.483C23.7295 72.5361 23.7465 72.5792 23.7866 72.6123C28.8477 76.7631 34.5701 79.2806 40.9537 80.1649C41.9894 80.3083 43.0035 80.3985 43.9961 80.4356C51.671 80.7234 58.6807 78.6756 65.0252 74.2922C65.5957 73.8982 66.3266 73.3347 67.2179 72.6018C67.258 72.5687 67.2746 72.5266 67.2675 72.4755C66.5141 66.529 63.5363 61.3616 58.8261 57.7086C58.02 57.083 57.1944 56.5321 56.3492 56.0558C52.3147 53.7819 47.9574 52.867 43.2772 53.3112C41.9317 53.4385 40.6118 53.6987 39.3174 54.0917C34.8298 55.4533 31.1257 57.9838 28.2051 61.6834Z" fill="white"/>
                </svg>Log uit
                </a>


            </section>
        </div>
    </nav>










    <header>
        <div>   
            <h1>Tijdschema</h1>
        </div>
    
    </header>



    <main>

    

    <div class=containerMain>

       
        <form action="" method="post">

            <label for="date">
            Datum:
            <input type="date" id="date" name="date"  value="<?= htmlentities($date) ?>"/>
            <p class="help is-danger">
                <?= $errors['date'] ?? '' ?>
            </p>
            </label>


            <button type="submit" name="submit">Zoeken op datum</button>





        </form>



        <h2>reserveringen voor <?= $date ?></h2>
        <button class="collapsible"> 10:00      aantal mensen: <?= $totalp10 ?>     aantal groepen: <?= $totalg10 ?>   </button>
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
        <button class="collapsible">11:00        aantal mensen: <?= $totalp11 ?>     aantal groepen: <?= $totalg11 ?> </button>
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
        <button class="collapsible"> 12:00      aantal mensen: <?= $totalp12 ?>     aantal groepen: <?= $totalg12 ?>   </button>
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

        <button class="collapsible"> 13:00      aantal mensen: <?= $totalp13 ?>     aantal groepen: <?= $totalg13 ?>   </button>
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


        <button class="collapsible"> 14:00      aantal mensen: <?= $totalp14 ?>     aantal groepen: <?= $totalg14 ?>   </button>
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


        <button class="collapsible"> 15:00      aantal mensen: <?= $totalp15 ?>     aantal groepen: <?= $totalg15 ?>   </button>
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


        <button class="collapsible"> 16:00      aantal mensen: <?= $totalp16 ?>     aantal groepen: <?= $totalg16 ?>   </button>
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

        <button class="collapsible"> 17:00      aantal mensen: <?= $totalp17 ?>     aantal groepen: <?= $totalg17 ?>   </button>
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

        <button class="collapsible"> 18:00      aantal mensen: <?= $totalp18 ?>     aantal groepen: <?= $totalg18 ?>   </button>
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

        <button class="collapsible"> 19:00      aantal mensen: <?= $totalp19 ?>     aantal groepen: <?= $totalg19 ?>   </button>
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

        <button class="collapsible"> 20:00      aantal mensen: <?= $totalp20 ?>     aantal groepen: <?= $totalg20 ?>   </button>
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

        <button class="collapsible"> 21:00      aantal mensen: <?= $totalp21 ?>     aantal groepen: <?= $totalg21 ?></button>
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

        <button class="collapsible"> 22:00      aantal mensen: <?= $totalp22 ?>     aantal groepen: <?= $totalg22 ?></button>
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

</main>
    <footer>
        <section>
            <div>
                <a href=""><p>Huisregels</p></a>
            </div>
            <div>
                <a href=""><p>Algemene voorwaarden</p></a>
            </div>
            <div>
                <a href=""><p>Privacyverklaring</p></a>
            </div>
        </section>
        <div>
            <p>©2023 Cube Bouldergym</p>
        </div>

    </footer>

</div>







</body>


