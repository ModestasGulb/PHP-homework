<!DOCTYPE html>
<?php 
if(!isset($_COOKIE["Aplanyta_kartu"])) {
    $kartai = 1;
} else {
    $kartai = $_COOKIE[$kartai] + 1;
}
setcookie("Aplankyta_kartu", $kartai, time()+60);
?>
<html lang="en">
<body>

<?php 
print ("<div>".$kartai."</div>");
?>
    
</body>
</html>