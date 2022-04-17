<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <form action = "" method = "post">
            <input type = "text" name = "input">
            <button type = "submit" name = "submit">Submit</button>

            <?php
            if(isset($_POST['submit']))
            {
                $input = $_POST['input'];
                $PanjangInputan = strlen($input);
                $Huruf = strtoupper($input);
                $output = str_split($Huruf);

                echo "<h3>Input : </h3><br>";
                echo "$input<br>";
                echo "<h3>Output : </h3><br>";

                for($i = 0; $i < $PanjangInputan; $i++)
                {
                    for($j = 0; $j < $PanjangInputan; $j++)
                    {
                        if($i == 0)
                        {
                            echo $output[$j];
                            for($k = 1; $k < $PanjangInputan; $k++)
                            {
                                echo strtolower($output[$j]);
                            }
                        }
                    }
                }
            }
            ?>
</form>
</body>
</html>