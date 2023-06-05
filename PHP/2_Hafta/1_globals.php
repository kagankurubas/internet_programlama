<?php

    $a=10;
    $b=20;

    $GLOBALS["universite"] = "Balikesir";
    function topla($q,$w){
        echo $GLOBALS["universite"];
        echo "<br>";
        return $q+$w;
    }
    echo topla(3,5);
?>
<br>
<a href="2_globals.php">2. Global Sayfası</a>