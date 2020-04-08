<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nd 5</title>
</head>
<body>
    <?php
    $my_array = ["dog", "cat", "cow", "rabbit"];
    $values = [45, 56, 78];
    include "lib.php";
    rikiavimas($my_array);
    print_r($my_array);
    print("<br>");
    print(liekana(47, 5));
    ?>
</body>
</html>