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
            <th>Daftar Smartphone Samsung</th>
            </tr>

    <?php
    $daftar = array(
                    "Samsung Galaxy S22",
                    "Samsung Galaxy S22+", 
                    "Samsung Galaxy A03", 
                    "Samsung Galaxy Xcover 5"
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