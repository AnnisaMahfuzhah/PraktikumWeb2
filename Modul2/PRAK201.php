<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <form action = "" method = "POST">
        <div>
            <label for = "">Nama : 1</label>
            <input type = "text" name = "nama1">
        </div>
        <div>
            <label for = "">Nama : 2</label>
            <input type = "text" name = "nama2">
        </div>
        <div>
            <label for = "">Nama : 3</label>
            <input type = "text" name = "nama3">
        </div>
        <button type = "submit" name = "submit">Urutkan</button><br>

    <?php
    if(isset($_POST["submit"]))
    {
        $nama1 = $_POST ['nama1'];
        $nama2 = $_POST ['nama2'];
        $nama3 = $_POST ['nama3'];
        
        if($nama1 > $nama2 and $nama1 > $nama3)
        {
            if($nama2 > $nama3)
            {
                echo "$nama3<br>$nama2<br>$nama1";
            }
            else
            {
                echo "$nama2<br>$nama3<br>$nama1";
            }
        }
        elseif($nama2 > $nama1 and $nama2 > $nama3)
        {
            if($nama1 > $nama3)
            {
                echo "$nama3<br>$nama1<br>$nama2";
            }
            else
            {
                echo "$nama1<br>$nama3<br>$nama2";
            }
        }

        elseif($nama3 > $nama1 and $nama3 > $nama2)
        {
            if($nama1 > $nama2)
            {
                echo "$nama2<br>$nama1<br>$nama3";
            }
            else
            {
                echo "$nama1<br>$nama2<br>$nama3";
            }
        }
    }
    ?>
</form>
</body>
</html>