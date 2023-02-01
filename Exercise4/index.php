<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Afficher les instructions du jour de la semaine</h2>
<?php
$jour = "5";

switch ($jour) {
    case "1":
        echo "Le jour est  Lundi!";
        break;
    case "2":
        echo "Le jour est  Mardi!";
        break;
    case "3":
        echo "Le jour est  Mercredi!";
        break;
	case "4":
        echo "Le jour est  Jeudi!";
        break;
    case "5":
        echo "Le jour est Vendredi!";
        break;
    case "6":
        echo "Le jour est  Samedi!";
        break;
	case "7":
        echo "Le jour est Dimanche!";
        break;
    default:
        echo "le nombre est invalide!";
}
?> 
</body>
</html>