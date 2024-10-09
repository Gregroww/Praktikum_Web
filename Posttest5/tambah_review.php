<?php
require 'koneksi.php';

if (isset($_POST['tambah'])) {
    $user = $_POST['user'];
    $nama_tempat = $_POST['nama_tempat'];
    $ulasan = $_POST['ulasan'];
    $rating = $_POST['rating'];
    $tanggal = $_POST['tanggal'];


    // Handle upload foto
    // $foto = $_FILES['foto']['name'];
    // $target_dir = "uploads/";
    // $target_file = $target_dir . basename($foto);

    // if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_file)) {
        $query = "INSERT INTO start_review VALUES ('', '$user', '$nama_tempat', '$ulasan', '$rating','$tanggal', '' )";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'start_review.php';
            </script>";
        } else {
            echo "<script>
            alert('Data gagal ditambahkan');
            document.location.href = 'start_review.php';
            </script>";
        }
    // } else {
    //     echo "<script>
    //     alert('Upload foto gagal');
    //     document.location.href = 'tambah_review.php';
    //     </script>";
    // }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Review</title>
    <link rel="stylesheet" href="style/tambah.css">
</head>
<body>
    <div class="container">
        <h1 class="title">Tambah Review</h1>
        <p class="title">Bagikan pengalaman kamu di tempat ini!</p>
        <div class="content">
            <form action="" method="POST" enctype="multipart/form-data">

                <label for="user">Nama User</label><br>
                <input type="text" id="user" name="user" required><br>

                <label for="nama_tempat">Nama Tempat</label><br>
                <input type="text" id="nama_tempat" name="nama_tempat" required><br>

                <label for="ulasan">Ulasan</label><br>
                <textarea id="ulasan" name="ulasan" required></textarea><br>

                <label for="rating">Rating</label><br>
                <input type="number" id="rating" name="rating" min="1" max="5" required><br>

                <label for="tanggal">Tanggal</label><br>
                <input type="date" id="tanggal" name="tanggal" required><br>

                <!-- <label for="foto">Foto</label><br>
                <input type="file" id="foto" name="foto"><br> -->

                <input class="button" type="submit" value="Tambah" name="tambah">
            </form>
        </div>
    </div>
</body>
</html>
