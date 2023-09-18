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
    <?php
    $num1 = 100;
    $num2 = 50;
    $num = $num1 + $num2;

    echo '<h1>$num</h1>';

    $i = 1;
    while($i < 7){
        echo "<h$i>Hello World </h$i>";
        $i++;
    }
    $i = 6;
    do{
        echo "<h$i>Hello World </h$i>";
        $i--;
    }while($i > 0);
    for ( $i = 1; $i < 7; $i++){
        echo "<h$i>Hello World </h$i>";
    } //for for-loops we don't have to worry about i++/i-- because it will do it for us

    echo "<br /><br /><hr /><br />";
    $Full_Name = "Doug Smith";
    $Position = strpos($Full_Name, ' ');

    echo $Position;
    echo "<br /><br /><hr /><br />";

    echo $Full_Name;
    echo "<br />";

    $Full_Name = strtoupper($Full_Name);
    echo $Full_Name;

    echo "<br /><br /><hr /><br />";

    echo $Full_Name;
    echo "<br />";

    $Full_Name = strtolower($Full_Name);
    echo $Full_Name;

    echo "<br /><br /><hr /><br />";

    $nameParts = explode(' ',$Full_Name);
    echo $nameParts[0];
    echo "<br />";
    echo $nameParts [1];
    ?>

</main>
<footer><?php include '../includes/footer.php'?></footer>
</body>
</html>

<!--../ is going back in a directory-->