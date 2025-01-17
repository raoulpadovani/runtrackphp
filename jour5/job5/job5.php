<?php
    function occurence($char,$str)
    {  
        $count = 0;
        for ($i = 0; $i < strlen($str); $i++)
        {
            if ($str[$i] == $char)
            {
                $count++;
            }
        }
        return $count;
    }
    $str = "bonjour";
    $char = "o";
    $resultat =occurence($char,$str);
    echo "Le nombre d'occurrences de '$char' dans '$str' est : " . $resultat;



?>
