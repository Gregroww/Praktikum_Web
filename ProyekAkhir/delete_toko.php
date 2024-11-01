<?php
require 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $findQuery = mysqli_query($conn, "SELECT * FROM stores WHERE id = $id");
    $store = mysqli_fetch_assoc($findQuery);

    if ($store) {
        // Hapus data dari database
        $query = "DELETE FROM stores WHERE id = $id";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<script>
            alert('Data berhasil dihapus');
            document.location.href = 'admin_list_toko.php';
            </script>";
        } else {
            echo "<script>
            alert('Data gagal dihapus');
            document.location.href = 'admin_list_toko.php';
            </script>";
        }
    } else {
        echo "<script>
        alert('Data tidak ditemukan');
        document.location.href = 'admin_list_toko.php';
        </script>";
    }
} else {
    echo "<script>
    alert('Data tidak ditemukan');
    document.location.href = 'admin_list_toko.php';
    </script>";
}
?>
