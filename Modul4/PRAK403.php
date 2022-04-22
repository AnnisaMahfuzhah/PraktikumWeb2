<!DOCTYPE html>
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
            th{
                border: 1px solid #000;
                padding : 5px;
                background-color: lightgrey;
            }
        </style>
    </head>
    <body>
    <?php
        $krs = array(
            array("no" => "1", "nama" => "Ridho", 
            "matkul" => array(
                array("matakuliah" => "Pemograman I", "sks" => 2),
                array("matakuliah" => "Praktikum Pemograman I", "sks" => 1),
                array("matakuliah" => "Pengantar Lingkungan Lahan Basah", "sks" => 2),
                array("matakuliah" => "Arsitektur Komputer", "sks" => 3)
                )  
            ),
            array("no" => "2", "nama" => "Ratna", 
            "matkul" => array(
                array("matakuliah" => "Basis Data I", "sks" => 2),
                array("matakuliah" => "Praktikum Basis Data I", "sks" => 1),
                array("matakuliah" => "Kalkulus", "sks" => 3),
                ) 
            ),
            array("no" => "3", "nama" => "Tono", 
            "matkul" => array(
                array("matakuliah" => "Rekayasa Perangkat Lunak", "sks" => 3),
                array("matakuliah" => "Analisis dan Perancangan Sistem", "sks" => 3),
                array("matakuliah" => "Komputasi Awan", "sks" => 3),
                 array("matakuliah" => "Kecerdasan Bisnis", "sks" => 3)
                )
                
            )
        );
        for($c = 0; $c < count($krs); $c++)
            {
                $krs[$c]['totalsks'] = 0;
                for($d = 0; $d < count($krs[$c]["matkul"]); $d++)
                {
                    $krs[$c]["totalsks"] += $krs[$c]["matkul"][$d]["sks"];
                }
            }
        ?>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Mata Kuliah diambil</th>
                <th>SKS</th>
                <th>Total SKS</th>
                <th>Keterangan</th>
            </tr>
        <?php
            for($c = 0; $c < count($krs); $c++)
            {
                echo "<tr>";
                for($d = 0; $d < count($krs[$c]["matkul"]); $d++)
                {
                    if($d == 0){
                        echo "<td>".$krs[$c]["no"]."</td>";
                        echo "<td>".$krs[$c]["nama"]."</td>";
                        echo "<td>".$krs[$c]["matkul"][$d]["matakuliah"]."</td>";
                        echo "<td>".$krs[$c]["matkul"][$d]["sks"]."</td>";
                        echo "<td>".$krs[$c]["totalsks"]."</td>";
                        if($krs[$c]["totalsks"] < 7){
                            echo "<td style = 'background-color : red'>".$krs[$c]["keterangan"] = "Revisi KRS"."</td>";
                        }
                        else{
                            echo "<td style = 'background-color : green'>".$krs[$c]["keterangan"] = "Tidak Revisi"."</td>";

                        }
                    }
                    else{
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "<td>".$krs[$c]["matkul"][$d]["matakuliah"]."</td>";
                        echo "<td>".$krs[$c]["matkul"][$d]["sks"]."</td>";
                        echo "<td></td>";
                        echo "<td></td>";
                    }
                    echo "</tr>";
                }
            }
        ?>
        </table>
</body>
</html>