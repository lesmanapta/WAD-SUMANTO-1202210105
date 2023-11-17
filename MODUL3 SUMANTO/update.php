<?php
// Sertakan file koneksi
include("connect.php");

// Jika terdapat nilai 'id' pada $_GET
if(isset($_GET['id'])){
    // Ambil nilai 'id' dari $_GET dan simpan ke dalam variabel $id
    $id = $_GET['id'];

    // Fungsi update dengan parameter koneksi ($koneksi) dan data
    function update($koneksi, $data){
        // Ambil nilai 'id' dari data dan simpan ke dalam variabel $id
        $id = $data['id'];
        // Ambil nilai 'nama_mobil' dari data dan simpan ke dalam variabel $nama_mobil
        $nama_mobil = $data['nama_mobil'];
        // Ambil nilai 'brand_mobil' dari data dan simpan ke dalam variabel $brand_mobil
        $brand_mobil = $data['brand_mobil'];
        // Ambil nilai 'warna_mobil' dari data dan simpan ke dalam variabel $warna_mobil
        $warna_mobil = $data['warna_mobil'];
        // Ambil nilai 'tipe_mobil' dari data dan simpan ke dalam variabel $tipe_mobil
        $tipe_mobil = $data['tipe_mobil'];
        // Ambil nilai 'harga_mobil' dari data dan simpan ke dalam variabel $harga_mobil
        $harga_mobil = $data['harga_mobil'];

        // Buat query SQL UPDATE untuk mengubah data pada tabel showroom_mobil
        $query = "UPDATE showroom_mobil SET 
                  nama_mobil = '$nama_mobil', 
                  brand_mobil = '$brand_mobil', 
                  warna_mobil = '$warna_mobil', 
                  tipe_mobil = '$tipe_mobil', 
                  harga_mobil = '$harga_mobil' 
                  WHERE id = $id";

        // Eksekusi query SQL menggunakan mysqli_query pada koneksi
        $result = mysqli_query($koneksi, $query);

        // Jika terdapat pengaruh perubahan (affected rows) pada koneksi
        if($result){
            // Tampilkan pesan menggunakan JavaScript: "Data Berhasil diubah"
            echo "<script>alert('Data Berhasil diubah');</script>";
            // Arahkan ke halaman 'list_mobil.php'
            echo "<script>window.location.href='list_mobil.php';</script>";
        } else {
            // Jika tidak terdapat pengaruh perubahan pada koneksi
            // Tampilkan pesan menggunakan JavaScript: "Data Gagal diubah"
            echo "<script>alert('Data Gagal diubah');</script>";
            // Arahkan ke halaman 'list_mobil.php'
            echo "<script>window.location.href='list_mobil.php';</script>";
            // Tampilkan pesan error dari koneksi
            echo "Error: " . mysqli_error($koneksi);
        }
    }

    // Buat array data dengan nilai
    $data = array(
        'id' => $id,
        'nama_mobil' => $_POST['nama_mobil'],
        'brand_mobil' => $_POST['brand_mobil'],
        'warna_mobil' => $_POST['warna_mobil'],
        'tipe_mobil' => $_POST['tipe_mobil'],
        'harga_mobil' => $_POST['harga_mobil']
    );

    // Panggil fungsi update dengan data yang sesuai
    update($conn, $data);
}

// Tutup koneksi ke database
mysqli_close($conn);
?>
