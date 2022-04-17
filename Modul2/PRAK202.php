<!DOCTYPE html>
<html>
    <head>
        <style>
            .error {color : #FF0000;}
        </style>
    </head>
    <body>
    <?php
    error_reporting(0);
    $nama = $_POST ['nama'];
    $nim = $_POST ['nim'];
    $jeniskelamin = $_POST ['jeniskelamin'];
    $namaErr = $nimErr = $jeniskelaminErr = "";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty($_POST["nama"]))
        {
            $namaErr = "Nama tidak boleh kosong";
        }

        if(empty($_POST["nim"]))
        {
            $nimErr = "NIM tidak boleh kosong";
        }

        if(empty($_POST["jeniskelamin"]))
        {
            $jeniskelaminErr = "Jenis kelamin tidak boleh kosong";
        }
    }
    ?>
        <form action = "" method = "POST">
        <div>
            <label for = "">Nama :</label>
            <input type = "text" name = "nama" value = "<?php if(isset($nama)) echo $nama;?>">
            <span class = "error">*<?php echo $namaErr;?></span><br>
        </div>
        <div>
            <label for = "">NIM :</label>
            <input type = "text" name = "nim" value = "<?php if(isset($nim)) echo $nim;?>">
            <span class = "error">*<?php echo $nimErr;?></span><br>
        </div>
        <div>
            <label for = "">Jenis Kelamin :</label>
            <span class = "error">*<?php echo $jeniskelaminErr;?></span><br>
            <input type = "radio" name = "jeniskelamin" <?php if(isset($jeniskelamin) and $jeniskelamin == "lakilaki") echo "cheked";?> value = "laklaki">Laki-laki<br>
            <input type = "radio" name = "jeniskelamin" <?php if(isset($jeniskelamin) and $jeniskelamin == "perempuan") echo "cheked";?> value = "perempuan">Perempuan<br>
        </div>
            <button type = "submit" name = "submit">Submit</button><br><br>

    <?php
    if(isset($_POST["submit"]))
    {
        if($nama != NULL && $nim != NULL && $jeniskelamin != NULL)
        {
            echo "<h2>Output :</h2>";
            echo "$nama<br>$nim<br>$jeniskelamin";
        }
    }
    ?>
</form>
</body>
</html>