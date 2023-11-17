<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detail Mobil</title>
    </head>
<?php
    include("navbar.php");
    include("connect.php");

    $id = $_GET['id'];

    // Buatlah query untuk mengambil masing-masing data berdasarkan id dari database (gunakan fungsi GET dan mysqli_fetch_assoc() 
    // serta query SELECT dan WHERE)

    $query = "SELECT * FROM showroom_mobil WHERE id = $id";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    ?>

    <!-- HTML Code -->

    <div class="row">
            <center>
                <h1>Detail Mobil</h1>
                <div class="col-md-4 p-3">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <!-- Display data fetched from the database -->
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="nama_mobil" id="nama_mobil" value="<?php echo $row['nama_mobil']; ?>" disabled>
                                    <label for="nama_mobil">Nama Mobil</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="brand_mobil" id="brand_mobil" value="<?php echo $row['brand_mobil']; ?>" placeholder="Brand Mobil" disabled>
                                    <label for="brand_mobil">Brand Mobil</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="warna_mobil" id="warna_mobil" value="<?php echo $row['warna_mobil']; ?>" disabled>
                                    <label for="warna_mobil">Warna Mobil</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="tipe_mobil" id="tipe_mobil" value="<?php echo $row['tipe_mobil']; ?>" disabled>
                                    <label for="tipe_mobil">Tipe Mobil</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" name="harga_mobil" id="harga_mobil" value="<?php echo $row['harga_mobil']; ?>" disabled>
                                    <label for="harga_mobil">Harga Mobil </label>
                                </div>
                                <!-- Edit and Delete buttons -->
                                <a name="update" id="update" href="form_update_mobil.php?id=<?php echo $id ?>" class="btn btn-warning mb-3 mt-3 w-100">Edit</a>
                                <a name="delete" id="delete" href="delete.php?id=<?php echo $id ?>" class="btn btn-danger mb-3 mt-3 w-100">Delete</a>
                            </form>
                        </div>
                    </div>
                </div>
            </center>
        </div>

<?php
} else {
    echo "Tidak ada data dalam tabel";
}

$conn->close();
?>
