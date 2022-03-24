    <?php
            $celcius = 37.841;
            echo " Suhu : $celcius <br>";

            $konversi = number_format((9/5)*$celcius + 32, 4);
            $suhu = number_format($konversi, 4);
            echo "Farenheit : $suhu <br>";

            $konversi = number_format((4/5)*$celcius, 4);
            $suhu = number_format($konversi, 4);
            echo "Reamur : $suhu <br>";

            $konversi = number_format($celcius+273, 4);
            $suhu = number_format($konversi, 4);
            echo "Kelvin : $suhu <br>";
    ?>