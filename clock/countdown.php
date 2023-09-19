<?php
/*
 * this is a countdown timer
 * End of Semester 12-11-2023
 */

$secPerMin = 60;
$secPerHour = 60 * $secPerMin;
$secPerDay = 24 * $secPerHour;
$secPerYear = 365 * $secPerDay;

//current time
$now = time();

//End of Semester time
$endSemester = mktime(12,0,0,12,11,2023);

//number of seconds between now and then
$seconds = $endSemester - $now;

$Years = floor($seconds/$secPerYear);
$seconds = $seconds - ($Years * $secPerYear);

$Days = floor($seconds / $secPerDay);
$seconds = $seconds - ($Days * $secPerDay);

$Hours = floor($seconds / $secPerHour);
$seconds = $seconds - ($Hours * $secPerHour);

$Minutes = floor($seconds / $secPerMin);
$seconds = $seconds - ($Minutes * $secPerMin);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Lisa's Homepage</title>
    <link rel="stylesheet" href="../css/base.css">
</head>
<body>
<header><?php include '../includes/header.php'?></header>
<nav><?php include '../includes/nav.php'?></nav>
<main>
    <h3>End of Semester Countdown</h3>
    <p>Years: <?=$Years ?> | Days: <?=$Days ?> | Hours: <?=$Hours ?>
        | Minutes: <?=$Minutes ?> | Seconds: <?=$seconds ?></p>
</main>
<footer><?php include '../includes/footer.php'?></footer>
</body>
</html>


