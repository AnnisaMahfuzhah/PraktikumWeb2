    <?php
    
        $luasalas = 4.5;
        $tinggilimas = 5.4;
        $volume = number_format($luasalas * $tinggilimas / 2,3);
        $formatvolume = number_format($volume,3);

        echo "Luas Alas : $luasalas <br>";
        echo "Tinggi Limas : $tinggilimas <br>";
        echo "Volume Limas : $formatvolume m3";
    ?>