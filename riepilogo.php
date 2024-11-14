<?php
session_start();
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

       echo "<h1>Riepilogo</h1>";
       echo "<ul>";
                foreach ($_SESSION['array'] as $frase) {
                    echo "<li>" . $frase . "</li>";
                }

        echo "</ul>";
        echo "<table>";
            echo "<tr>";
                echo "<th>Caratteri</th>";
                echo "<th>Parole</th>";
            echo "</tr>";
            echo"<tr>";
                echo "<td>" . $_SESSION['caratteri'] . "</td>";
                echo "<td>" . $_SESSION['parole'] . "</td>";
            echo "</tr>";
       echo "</table>";
        echo "<a href='frase.html' style='text-decoration: none;'>Torna indietro</a>";
    
    ?>  

</body>

</html>
