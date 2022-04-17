<!DOCTYPE html>
<html>
    <head>
        <style>
            img{
                width: 15px;
            }
        </style>
    </head>
    <body>
        <form action = "" method = "post">
            <div>
                <label>Batas Bawah : </label>
                <input type = "text" name = "bawah">
            </div>
            <div>
                <label>Batas Atas : </label>
                <input type = "text" name = "atas">
            </div>
            <button type = "submit" name = "submit">Cetak</button><br><br>
            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                if(isset($_POST["submit"]))
                    {
                        $bawah = $_POST['bawah'];
                        $atas = $_POST['atas'];
                        $image = "https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png";
                        do
                        {
                            if(($bawah + 7) % 5 == 0 )
                            {
                                echo " <img src = $image>";
                            }
                            else
                            {
                                echo " $bawah";
                            }
                            $bawah++;
                        }
                        while($bawah <= $atas);
                    }
            }
            ?>
</form>
</body>
</html>