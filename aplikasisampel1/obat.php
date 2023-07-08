<?php
$kon = mysqli_connect("localhost", "root", "", "aplikasisampel1");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tabel Obat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <div class="container mt-3">
    <h2>TABEL OBAT</h2>
    <form action="" method="post">
      <div class="mb-3 mt-3">
        <label for="obat_sakit">Obat :</label>
        <input type="text" class="form-control" id="obat_sakit" placeholder="Ketik gejala" name="obat_sakit">
      </div>
      <div class="mb-3">
        <label for="nama_obat">Nama Obat:</label>
        <input type="text" class="form-control" id="nama_obat" placeholder="Enter nama obat" name="nama_obat">
      </div>
      <div class="mb-3">
        <label for="tanggal_kadaluarsa">Tanggal kadaluarsa:</label>
        <input type="date" class="form-control" id="tanggal_kadaluarsa" placeholder="Enter tanggal kadaluarsa" name="tanggal_kadaluarsa">
      </div>
      <div class="mb-3">
        <label for="dosis">Dosis</label>
        <input type="text" class="form-control" id="dosis" placeholder="Enter dosisnya" name="dosis">
      </div>
      <div class="mb-3">
        <label for="jumlah">Jumlah</label>
        <input type="text" class="form-control" id="jumlah" placeholder="Enter jumlah" name="jumlah">
      </div>
      <div class="mb-3">
        <label for="harga">Harga</label>
        <input type="text" class="form-control" id="harga" placeholder="Enter harga" name="harga">
      </div>

      <button type="submit" class="btn btn-primary" name="bSimpan">Simpan</button>
    </form>

    <?php
    if (isset($_POST['bSimpan'])) {
      $ObatSakit = $_POST['obat_sakit'];
      $namaobat = $_POST['nama_obat'];
      $tanggalkadaluwarsa = $_POST['tanggal_kadaluarsa'];
      $dosis = $_POST['dosis'];
      $jumlah = $_POST['jumlah'];
      $harga = $_POST['harga'];

      $sqlInsertData = "INSERT INTO Obat (ObatSakit, namaobat, tanggalkadaluwarsa, dosis, jumlah, harga) VALUES ('$ObatSakit','$namaobat','$tanggalkadaluwarsa','$dosis','$jumlah','$harga')";

  if (mysqli_query($kon, $sqlInsertData)) {
    echo "Data berhasil disimpan.";
  } else {
    echo "Error: " . mysqli_error($kon);
      }
    }
    ?>
  </div>

</body>
</html>
