<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>MG PHP ND 2</title>
</head>
<body>
<h1>KMI skaičiuoklė</h1>
<div>
<form action="KMI.php" method="POST">
<h3>Įveskite duomenis:</h3>
<label for="svoris">Jūsų svoris (kilogramais):</label><br>
<input type="number" id="svris" name="svoris"><br>
<label for="ugis">Jūsų ūgis (centimetrais):</label><br>
<input type="number" id="ugis" name="ugis"><br>
<input type="submit" value="Skaičiuoti">
</form>
</div>

</body>
</html>