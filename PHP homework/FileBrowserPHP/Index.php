<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>File browser PHP</title>
</head>

<body>
    <h1>Directory contents:
        <?php

        // Display path

        $currentDir = $_SERVER["REQUEST_URI"];
        print($currentDir);

        ?> </h1>
    <table>
        <tr>
            <th>Type</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        <?php

        // Create data table

        $directoryToScan = './';
        $fileList = scandir($directoryToScan);

        foreach ($fileList as $value) {
            $createRow = '';
            if ($value != '.' && $value != '..') {
                if (is_dir($value)) {
                    $createRow .= ('<tr><td>Directory</td>');
                    $createRow .= ('<td><a href="browser.php" dirtoscan="' . $directoryToScan  . $value . '
                    " currentdir="' . $currentDir . '/' . $value . '">'. $value . '</td><td></td></tr>');
                } else {
                    $createRow .= ('<tr><td>File</td>');
                    $createRow .= ('<td>' . $value . '</td><td></td></tr>');
                } 
            }
            print($createRow);
        }

        // print("<div>");
        // foreach ($fileList as $value) {
        //     print($value."<br>");
        // }
        // print("</div>");

        ?>

    </table>
</body>

</html>