<?php
    $a= "Merhaba";
    $b= "Dünya";
    $c= "Merhaba Dünya";
    echo $a." ".$b;

    echo "<hr>";

    echo "A değişkeni: ".($a)."<br>";
    echo "B değişkeni: ".($b)."<br>";
    echo "C değişkeni: ".($c)."<br>";

    echo "<hr>";


    echo "A değişkeninin uzunluğu: ".strlen($a)."<br>";
    echo "B değişkeninin uzunluğu: ".strlen($b)."<br>";
    echo "C değişkeninin uzunluğu: ".strlen($c)."<br>";

    echo "<hr>";

    echo "A değişkeninin kelime sayısı: ".str_word_count($a)."<br>";
    echo "B değişkeninin kelime sayısı: ".str_word_count($b)."<br>";
    echo "C değişkeninin kelime sayısı: ".str_word_count($c)."<br>";
    
    echo "<hr>";

    echo "A değişkeninin tersi: ".strrev($a)."<br>";
    echo "B değişkeninin tersi: ".strrev($b)."<br>";
    echo "C değişkeninin tersi: ".strrev($c)."<br>";

    echo "<hr>";

    echo "A değişkenini küçük harf: ".strtolower($a)."<br>";
    echo "B değişkenini küçük harf: ".strtolower($b)."<br>";
    echo "C değişkenini küçük harf: ".strtolower($c)."<br>";

    echo "<hr>";

    echo "A değişkenini büyük harf: ".strtoupper($a)."<br>";
    echo "B değişkenini büyük harf: ".strtoupper($b)."<br>";
    echo "C değişkenini büyük harf: ".strtoupper($c)."<br>";

    echo "<hr>";

?>