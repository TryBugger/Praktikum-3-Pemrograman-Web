<?php
$nama_barang = array(
    "Beras",
    "Telur",
    "Tepung",
    "Daging",
    "Minyak"
);

$berat_kg = array(25, 2, 5, 15, 1);
$stok = array(150, 0, 100, 75, 100);
$canConvertLiter = array(TRUE, FALSE, FALSE, FALSE, TRUE)
?>


<!DOCTYPE <html>
    <head>
        <title> Praktikum 3 </title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="judulContainer">
            <img class="gambarWarung" src="Grocery.png" alt="gambar toko" width="650" height="120">
            <div class="namaWarung"> <b>Warung Kak Joy </b></div>
        </div>
        

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Stok</th>
                    <th>Berat (kg)</th>
                    <th>Berat (gram)</th>
                    <th>Berat (miligram)</th>
                    <th>Berat (Liter)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    for ($row = 0; $row < 5; $row ++) {
                        if ($stok[$row] == 0) {
                            echo "<tr id=\"stokKosong\">";
                        } else {
                            echo "<tr>";
                        }
                        
                        echo "<td>", $row + 1, "</td>";
                        echo "<td>", $nama_barang[$row], "</td>";
                        echo "<td>", $stok[$row], "</td>";
                        echo "<td>", $berat_kg[$row], "</td>";
                        echo "<td>", $berat_kg[$row] * 1000, "</td>";
                        echo "<td>", $berat_kg[$row] * 1000 * 1000, "</td>";

                        if ($canConvertLiter[$row]) {
                            echo "<td>", $berat_kg[$row], "</td>";
                        } else {
                            echo "<td>-</td>";
                        }

                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>

        <footer>
            <p>Created By</p>
            <p><b>M Taqiyyuddin F : 105219039 </b></p>
        </footer>
    </body>
</html>