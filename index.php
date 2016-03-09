<!DOCTYPE html>
<html xmlns:broj="http://www.w3.org/1999/xhtml">
<head>
    <title> Prvi PHP </title>
    <meta charset="utf-8">
</head>

<body>
<h1>PRVI PHP</h1>
<forum>
    Prvi broj:<br>
    <input type="text" name="broj1" <br>
</forum>

<?php
        echo('Ovo je prije odlomka<br>');
        ECHO('<BR>');
        echo('Super,jos cemo dodat!!<br>');

        echo(date('d.m.Y.'));
    $ocjena = 5;
    echo('<br> Vaša ocjena je:' . $ocjena);
    $nova_var = 166.8;
    echo('<br>'. $nova_var);

    $rezultat = $ocjena + $nova_var;
    echo('<br>' . $rezultat);
?>

<p>
    Ovo je odlomak!
</P>
</body>
</html>

