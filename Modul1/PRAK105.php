<!DOCTYPE html>
<html>
    <head>
    <style> table, td,th
        {
            border : 1px solid black;
        }
        </style>
    </head>
    <body>
        <table>
            <tr>
            <th bgcolor = "red" width = "300" height = "100">
                <font size = "4">Daftar Smartphone Samsung</th>
            </tr>

    <?php
    $daftar = array(
                    1 => "Samsung Galaxy S22",
                    2 => "Samsung Galaxy S22+", 
                    3 => "Samsung Galaxy A03", 
                    4 => "Samsung Galaxy Xcover 5"
                    );
     foreach($daftar as $list):
    ?>
    <tr>
        <td><?php
            echo ($list);
            ?>
        </td>
    </tr>
    <?php 
        endforeach 
    ?>
        </table>
    </body>
</html>