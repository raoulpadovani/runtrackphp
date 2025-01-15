<?php
// Your PHP code goes here

    $str = "Hello LaPlateforme!";
    echo $str;
    $nom = "raoul";
    $type = "m";
    $float = "34,9";
    $valeur = $float;
    $array = [$valeur, $nom, $type];
   echo "<table border='1'";
    echo "<tr><<th>Index</th><td>Valeur</th></tr>";
    foreach($array as $index => $valeur){
        echo "<tr><td>$index</td><td>$valeur</td></tr>";
    }
    echo "</table>";
    
    



?>