<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Vérifiez les instructions relatives aux notes des étudiants</h2>
<?php

$notes = 40;

if ($notes>=60)
{
	$notes = " la première division";
}
elseif($notes>=45)
{
	$notes = " la deuxième division";
}
elseif($notes>=33)
{
	$notes = " la troixième division";
}
else
{
	$notes = "l'etudiant a echoué";
}

echo "La note d'étudiant sera : $notes";
?>
</body>
</html>