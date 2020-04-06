<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="StyleKMI.css">
    <title>MG PHP ND 2</title>
</head>

<body>
    <a href="index.php">
        <button>Skaičiuoklė</button>
    </a>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $svoris = $_REQUEST["svoris"];
        $ugis = $_REQUEST["ugis"];
    }

    $KMI = $svoris / (($ugis * $ugis) / 10000);
    
    if ($ugis <= 0 || $svoris <=0) {
        print "Neteisingai įvesti duomenys";
    }
    if ($KMI > 0 && $KMI < 18.5) {
        print "<p style=\" color: red\">Nepakankamas svoris<p>";
    }
    if ($KMI >= 18.5 && $KMI < 25) {
        print "<p style=\" color: green\">Normalus svoris<p>";
    }
    if ($KMI >= 25 && $KMI < 30) {
        print "<p style=\" color: red\">Antsvoris<p>";
    }
    if ($KMI >= 30) {
        print "<p style=\" color: red\">Nutukimas<p>";
    }

    ?>
</body>

</html>