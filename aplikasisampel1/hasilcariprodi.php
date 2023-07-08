<?php 
$kon=mysqli_connect("localhost","root","","aplikasisampel1");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tabel Akun</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <div class="d-flex justify-content-between mb-3">
    <h2>Tabel Akun</h2>
    
  </div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Kode Akun</th>
        <th>Username</th>
        <th>Aksi Rekord</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    $kCari = isset($_POST['kCari']) ? $_POST['kCari'] : '';

    $sqlcari = "SELECT kodeakun, username FROM akun WHERE kodeakun LIKE '%" . $kCari . "%' OR username LIKE '%" . $kCari . "%'";
    $qcari = mysqli_query($kon, $sqlcari);
    
    while ($rcari = mysqli_fetch_array($qcari)) {
      ?>
      <tr>
        <td><?php echo $rcari['kodeakun']; ?></td>
        <td><?php echo $rcari['username']; ?></td>
        <td>
        <button onclick="window.print()" class="btn btn-primary">Print</button>
        </td>
        <td>
          <a href="hapus_akun.php?akun=<?php echo $rcari['kodeakun']; ?>" class="btn btn-danger">Hapus</a>
        </td>
      </tr>
    <?php
    }
    ?>
    </tbody>
  </table>
</div>

</body>
</html>
