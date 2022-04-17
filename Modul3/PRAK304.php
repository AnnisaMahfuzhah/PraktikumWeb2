<!DOCTYPE html>
<html>
    <head>
        <style>
            img
            {
                width: 60px;
            }
        </style>
    </head>
    <body>
    <?php
        $bintang = 0;
        if(isset($_POST['bintang']))
            {
                $bintang = $_POST['bintang'];
            }

        if(isset($_POST['tambah']))
            {
                $bintang++;
            }
        elseif(isset($_POST['kurang']))
            {
                $bintang--;
            }
        ?>  
        <?php if($bintang == 0) :?>
        <form action = "" method = "post">
            <div>
                <label>Jumlah bintang</label>
                <input type = "text" name = "bintang">
            </div>
            <button type = "submit" name = "submit">Submit</button><br><br>
        </form>
        
            <?php
            endif;
            if($bintang!=0): echo "Jumlah bintang $bintang <br><br>";
            for ($i=0; $i<$bintang; $i++)
            {
                 echo "<img src='https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png'>";
            }
            ?>
            <form action = "" method = "post">
                <input type = "hidden" name = "bintang" value = "<?= $bintang; ?>">
                <button type = "submit" name = "tambah">Tambah</button>
                <button type = "submit" name = "kurang">Kurang</button>
            </form>
        <?php endif; ?>        
</body>
</html>