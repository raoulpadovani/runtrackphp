<?php
    function bonjour($jour){
        if ($jour == "true"){
            echo "bonjour";
        }
        else{
            echo "bonsoir";
        }
    }
    $jour = "true";
    bonjour($jour);
?>
