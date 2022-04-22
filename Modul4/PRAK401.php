<DOCTYPE html>
<html>
    <head>
        <style>
            td{
                border: 1px solid #000;
                padding : 5px;
            }
            table{
                border-collapse : collapse;
            }
        </style>
    </head>
    <body>
        <form action = "" method = "post">
            <div>
                <label>Panjang : </label>
                <input type = "text" name = "panjang">
            </div>
            <div>
                <label>Lebar : </label>
                <input type = "text" name = "lebar">
            </div>
            <div>
                <label>Nilai : </label>
                <input type = "text" name = "nilai">
            </div>
            <button type = "submit" name = "submit">Cetak</button><br>
        </form>
        <?php
            if(isset($_POST['submit']))
            {
                
                $panjang = $_POST['panjang'];
                $lebar = $_POST['lebar'];
                $input = $_POST['nilai'];
                $nilai = explode(" ", $input);
                $k = 0;
                if($panjang*$lebar == count($nilai))
                {
                for($i = 0; $i < $panjang; $i++)
                {
                    echo "<table>";
                    echo "<tr>";
                    for($j = 0; $j < $lebar; $j++)
                    {
                        echo "<td>".$nilai[$k]."</td>";
                        $k++;
                    }
                    echo "</tr>";
                    echo "</table>";
                }
                }
                else
                {
                    echo "Panjang nilai tidak dengan ukuran matriks";
                }
            }
            ?>
</body>
</html>