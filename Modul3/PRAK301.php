<!DOCTYPE html>
<html>
    <head>
        <style>
            .ganjil{
                color:red;
            }
            .genap{
                color:green;
            }
        </style>
    </head>
    <body>
        <form action = "" method = "post">
            <div>
                <label>Jumlah Peserta : </label>
                <input type = "text" name = "peserta"><br>
            </div>
            <button type = "submit" name = "submit">Cetak</button><br>

            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                if(isset($_POST["submit"]))
                    {
                        $peserta = $_POST['peserta'];
                        $i = 1;
                        while($i <= $peserta)
                            {
                                if($i % 2 == 0)
                                {
                                    echo "<h2><span class = 'genap'>Peserta Ke- $i</span></h2>";
                                }
                                else
                                {
                                    echo "<h2><span class = 'ganjil'>Peserta Ke- $i</span></h2>";
                                }
                                $i++;
                            }
                    }
            }
            ?>
</form>
</body>
</html>