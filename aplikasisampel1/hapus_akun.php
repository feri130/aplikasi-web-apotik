<?php
$kon=mysqli_connect("localhost","root","","aplikasisampel1");

// Periksa apakah parameter akun telah diterima
if (isset($_GET['akun'])) {
    $akun = $_GET['akun'];

    // Lakukan operasi penghapusan akun di database
    $sql = "DELETE FROM akun WHERE kodeakun = '$akun'";
    $query = mysqli_query($kon, $sql);

    if ($query) {
        // Jika penghapusan berhasil, redirect ke halaman hasilcariprodi.php
        header("Location: hasilcariprodi.php");
        exit();
    } else {
        // Jika terjadi kesalahan dalam penghapusan
        echo "Terjadi kesalahan dalam menghapus akun.";
    }
} else {
    // Jika parameter akun tidak ada
    echo "Parameter akun tidak ditemukan.";
}
?>
