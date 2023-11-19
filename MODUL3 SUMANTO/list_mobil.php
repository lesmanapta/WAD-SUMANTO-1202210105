<?php
include("connect.php");

$query = "SELECT * FROM showroom_mobil";
$result = $conn->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
    <?php
    include("navbar.php");
    include("connect.php");
    
    // Buatlah query untuk mengambil data dari databases (gunakan query SELECT)

    $query = "SELECT * FROM showroom_mobil";
    $result = $conn->query($query);

    ?>

    <center>
        <div class="container">
            <h1>List Mobil</h1>
    
        <!--  **********************  1  **************************     -->
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='card mb-3'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>" . $row['nama_mobil'] . "</h5>";
                    echo "<p class='card-text'>Brand: " . $row['brand_mobil'] . "</p>";
                    echo "<p class='card-text'>Warna: " . $row['warna_mobil'] . "</p>";
                    echo "<p class='card-text'>Tipe: " . $row['tipe_mobil'] . "</p>";
                    echo "<p class='card-text'>Harga: $" . $row['harga_mobil'] . "</p>";
                    echo "<a href='form_detail_mobil.php?id=" . $row['id'] . "' class='btn btn-primary'>Detail</a>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "Tidak ada data dalam tabel";
            }
            $conn->close();
            

            //<!--  **********************  1  **************************     -->

            //<!--  **********************  2  **************************     -->

            
            

            
            
            //<!--  **********************  2  **************************     -->
            ?>
        </div>
    </center>
</body>
</html>
