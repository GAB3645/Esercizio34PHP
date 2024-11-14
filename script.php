<?php
session_start();

if (!isset($_SESSION['array'])) {
    $_SESSION['array'] = array();
}

if (!isset($_SESSION['caratteri'])) {
    $_SESSION['caratteri'] = 0;
}

if (!isset($_SESSION['parole'])) {
    $_SESSION['parole'] = 0;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$frase = $_POST['frase'];
$importanza = $_POST['importanza'];
echo "<p>Frase: $frase</p>";
echo "<p>Importanza: $importanza</p>";


if ($importanza == "4") {

    array_push($_SESSION['array'], $frase);
}

$caratteri = strlen($frase);
$parole = str_word_count($frase);

$_SESSION['caratteri'] += $caratteri;
$_SESSION['parole'] += $parole;

echo "<p>Caratteri: $_SESSION[caratteri]</p>";
echo "<p>Parole: $_SESSION[parole]</p>";


echo "<a href='frase.html' style='text-decoration: none;'>Torna indietro</a>";
echo "<br>";
echo "<a href='riepilogo.php' style='text-decoration: none;'>RIEPILOGO</a>";


