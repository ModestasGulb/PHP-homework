<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Be kablelių</title>
</head>

<body>
    <?php

    // Be kablelio gale

    print("<h3>Be kablelių gale ir priekyje</h3>");

    $vienmatis = [5, 6, 7, 9, 56, 76, 34];
    $asociatyvus = ['A' => 5, 'B' => 8, 'C' => 1, 'D' => 67];

    function isvardinti($my_array)
    {
        for ($i = 0; $i < count($my_array); $i++) {
            if ($i == ((count($my_array)) - 1)) {
                print($my_array[$i]);
            } else {
                print($my_array[$i] . ", ");
            }
        }
    }

    function isvardinti_asoc($my_array)
    {
        $toPrint = "";
        foreach ($my_array as $value) {
            $toPrint .= $value . ", ";
        }
        $toPrint = (substr($toPrint,0 , -2));
        print($toPrint);
    }

    print("Su vienmačiu masyvu:<br>");
    isvardinti($vienmatis);
    print("<br>");
    print("Su asociatyviuoju masyvu:<br>");
    isvardinti_asoc($asociatyvus);
    print("<br>");

    // Išvardinta kas antra reikšmė

    print("<h3>Išvardinta kas antra reikšmė</h3>");

    function kasAntra($my_array) {
        for ( $i = 1; $i < count($my_array); $i += 2) {
            print($my_array[$i] . "<br>");
        }
    }

    function kasAntraAsoc($my_array) {
        $values = [];
        foreach ($my_array as $value) {
            array_push($values, $value);
        }
        kasAntra($values);
    }


    print("Su vienmačiu masyvu:<br>");
    print("<br>");
    kasAntra($vienmatis);
    print("Su asociatyviuoju masyvu:<br>");
    print("<br>");
    kasAntraAsoc($asociatyvus);

    // Daugybos lentelė

    print("<h3>Daugybos lentelė</h3>");

    


    ?>

</body>

</html>