<?php
$kon = mysqli_connect("localhost", "root", "", "aplikasisampel1");

if (!$kon) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

$sqlCreateTable = "CREATE TABLE IF NOT EXISTS mahasiswa (
  id INT AUTO_INCREMENT PRIMARY KEY,
  Obat VARCHAR(255),
  `Nama Obat` VARCHAR(255),
  `Tanggal Kadaluarsa` DATE,
  Dosis VARCHAR(255),
  jumlah INT,
  Harga DECIMAL(10, 2)
)";

if (mysqli_query($kon, $sqlCreateTable)) {
  echo "Tabel mahasiswa berhasil dibuat atau sudah ada";
} else {
  echo "Error creating table: " . mysqli_error($kon);
}

if (isset($_POST['bSimpan'])) {
  $obatSakit = $_POST['Obat_Sakit'];
  $namaObat = $_POST['Nama_Obat'];
  $tanggalKadaluarsa = $_POST['tanggal_kadaluarsa'];
  $dosis = $_POST['dosis'];
  $jumlah = $_POST['jumlah'];
  $harga = $_POST['harga'];

  $sqlInsertData = "INSERT INTO mahasiswa (Obat, `Nama Obat`, `Tanggal Kadaluarsa`, Dosis, jumlah, Harga) VALUES ('$obatSakit', '$namaObat', '$tanggalKadaluarsa', '$dosis', '$jumlah', '$harga')";

  if (mysqli_query($kon, $sqlInsertData)) {
    echo "Data berhasil disimpan.";
  } else {
    echo "Error: " . mysqli_error($kon);
  }
}

mysqli_close($kon);
?>
