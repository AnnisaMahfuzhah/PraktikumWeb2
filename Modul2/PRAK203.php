<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
        error_reporting(0);
        $nilai = $_POST ['nilai'];
        $dari = $ke = "";
        ?>
        <form action = "" method = "post">
        <div>
            <label for = "">Nilai :</label>
            <input type = "number" name = "nilai" value = "<?php if(isset($nilai)) echo $nilai;?>">
        </div>
        <div>
            <label for = "">Dari :</label><br>
            <input type = "radio" name = "dari" value = "celcius"<?php if(isset($dari) and $dari == "celcius") echo "cheked";?>>Celcius<br>
            <input type = "radio" name = "dari" value = "farenheit"<?php if(isset($dari) and $dari == "farenheit") echo "cheked";?>>Farenheit<br>
            <input type = "radio" name = "dari" value = "rheamur"<?php if(isset($dari) and $dari == "rheamur") echo "cheked";?>>Rheamur<br>
            <input type = "radio" name = "dari" value = "kelvin"<?php if(isset($dari) and $dari == "kelvin") echo "cheked";?>>Kelvin<br>
        </div>
        <div>
            <label for = "">Ke :</label><br>
            <input type = "radio" name = "ke" value = "celcius"<?php if(isset($ke) and $ke == "celcius") echo "cheked";?>>Celcius<br>
            <input type = "radio" name = "ke" value = "farenheit"<?php if(isset($ke) and $ke == "farenheit") echo "cheked";?>>Farenheit<br>
            <input type = "radio" name = "ke" value = "rheamur"<?php if(isset($ke) and $ke == "rheamur") echo "cheked";?>>Rheamur<br>
            <input type = "radio" name = "ke" value = "kelvin"<?php if(isset($ke) and $ke == "kelvin") echo "cheked";?>>Kelvin<br>
        </div>
        <button type = "submit" name = "submit">Konversi</button><br>

    <?php
    if(isset($_POST["submit"]))
    {
        $dari = $_POST ['dari'];
        $ke = $_POST ['ke'];
        
        if($dari == "celcius")
        {
            if($ke == "celcius")
            {
                $hasil = $nilai;
                echo "<h2>Hasil Konversi : $hasil &deg;C</h2>";
            }
            elseif($ke == "farenheit")
            {
                $hasil = (9/5)*$nilai + 32;
                echo "<h2>Hasil Konversi : $hasil &deg;F</h2>";
            }
            elseif($ke == "rheamur")
            {
                $hasil = (4/5)*$nilai;
                echo "<h2>Hasil Konversi : $hasil &deg;R</h2>";
            }
            elseif($ke == "kelvin")
            {
                $hasil = $nilai + 273;
                echo "<h2>Hasil Konversi : $hasil &deg;K</h2>";
            }
        }

        elseif($dari == "farenheit")
        {
            if($ke == "celcius")
            {
                $hasil = ($nilai - 32)/(9/5);
                echo "<h2>Hasil Konversi : $hasil &deg;C</h2>";
            }
            elseif($ke == "farenheit")
            {
                $hasil = $nilai;
                echo "<h2>Hasil Konversi : $hasil &deg;F</h2>";
            }
            elseif($ke == "rheamur")
            {
                $hasil =($nilai - 32)/(9/4);
                echo "<h2>Hasil Konversi : $hasil &deg;R</h2>";
            }
            elseif($ke == "kelvin")
            {
                $hasil = (11/20)*$nilai + 273;
                echo "<h2>Hasil Konversi : $hasil &deg;K</h2>";
            }
        }

        elseif($dari == "rheamur")
        {
            if($ke == "celcius")
            {
                $hasil = $nilai/(4/5);
                echo "<h2>Hasil Konversi : $hasil &deg;C</h2>";
            }
            elseif($ke == "farenheit")
            {
                $hasil = (9/4)*$nilai + 32;
                echo "<h2>Hasil Konversi : $hasil &deg;F</h2>";
            }
            elseif($ke == "rheamur")
            {
                $hasil = $nilai;
                echo "<h2>Hasil Konversi : $hasil &deg;R</h2>";
            }
            elseif($ke == "kelvin")
            {
                $hasil = $nilai/(4/5) + 273;
                echo "<h2>Hasil Konversi : $hasil &deg;K</h2>";
            }
        }

        elseif($dari == "kelvin")
        {
            if($ke == "celcius")
            {
                $hasil = $nilai - 273;
                echo "<h2>Hasil Konversi : $hasil &deg;C</h2>";
            }
            elseif($ke == "farenheit")
            {
                $hasil = (9/5)*($nilai - 273) +32;
                echo "<h2>Hasil Konversi : $hasil &deg;F</h2>";
            }
            elseif($ke == "rheamur")
            {
                $hasil = (4/5)*($nilai - 273);
                echo "<h2>Hasil Konversi : $hasil &deg;R</h2>";
            }
            elseif($ke == "kelvin")
            {
                $hasil = $nilai;
                echo "<h2>Hasil Konversi : $hasil &deg;K</h2>";
            }
        }
    }
    ?>
</form>
</body>
</html>