<!DOCTYPE html>
<html>
<head>
    <title>INA</title>
    <meta charset="utf-8">
</head>

<body>
<h1>INA</h1>

<?php

$cijena = $_POST['broj_litara'] * 8.5;
echo('Cijena goriva:' . $cijena . 'kn');

if ($cijena > 500) {

    echo('<br>Pa to ćemo morati uzeti na rate!');
}
if ($cijena < 500)
echo('<br> To možemo platiti gotovinom!');

?>


</body>
</html>