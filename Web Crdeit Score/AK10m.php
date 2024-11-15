<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>

body {
      padding: 0;
      margin: 0;
      background-color: aqua;
      background-size: cover;
      background-repeat: no-repeat;

      box-sizing: border-box;
    }
    footer {
      background-color: blue;
      padding: 12px;
      text-align: center;
      color: white;
      font-family: sans-serif;
      margin-top: 25px;
      height: 100px
    }
    header {
      background-color: blue;
      padding: 10px;
      text-align: center;
      color: white;
      font-family: sans-serif;

    }

    h1{
        text-align: center;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        padding: 10px;
    }


    </style>
</head>
<body>

    <header>
        <div>
            <h1>Daftar Siswa</h1>
        </div>
    </header>
    <main>
        <!-- nav -->
<div class="text-center">
    <a href=""><button class="btn btn-secondary btn-outline-light col-md-3 m-1 p-2"><h4>Analis Kimia</h4></button></a>
    <a href=""><button class="btn btn-light btn-outline-secondary col-md-3 p-2"><h4>Farmasi</h4></button></a>
    <a href=""><button class="btn btn-light btn-outline-secondary col-md-3 m-1 p-2"><h4>PPLG</h4></button></a>
</div>
        <!-- nav end -->
    
    <div class="container">

        <div class="text-center">
        <a href=""><button class="btn btn-light btn-outline-secondary col-md-3 mb-2 mt-2"><h5>Kelas 10</h5></button></a>
        <a href=""><button class="btn btn-secondary btn-outline-light col-md-3 mb-2 mt-2"><h5>Kelas 11</h5></button></a>
        <a href=""><button class="btn btn-secondary btn-outline-light col-md-3 mb-2 mt-2"><h5>Kelas 12</h5></button></a>
        </div>

        <table class="table table-bordered table-responsive text-center table-stripped">
        
            <tr>
                <th>No.</th>
                <th>Nama Siswa</th>
                <th>Skor</th>
            </tr>
<?php
$no = 1;
$tampil = mysqli_query($koneksidb,"SELECT * FROM tb_ak10");

while($data = mysqli_fetch_array($tampil)):


?>
            <tr>
                <td class="text-center"><?= $no++ ?></td>
                <td class="text-center"><?= $data["Nama"]?></td>
                <td class="text-center"><?= $data["Skor"]?></td>
            </tr>
        <!-- modal lapor -->

            <div class="modal" id="lapor" tabindex="-1" aria-labelledby="laporLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Laporkan</h5>
      </div>
      <form method="POST">
      <div class="modal-body">
        <b>Nama:</b><p><?= $data["Nama"]?></p><br>
        <b>Kelas:</b><p><?= $data["Kelas"]?></p><br>
        <b>Poin:</b><p><?= $data["Skor"]?></p><br>

        <select class="form-control" name="Skor">

            <option value="#">Pilih Jenis Pelanggaran</option>
            <option value="-2">Seragam tidak sesuai ketentuan -2</option>
            <option value="-5">Membuang sampah sembarangan -5</option>
            <option value="-10">Alpa -10</option>
            <option value="-5">Terlambat kurang dari 15 menit -5</option>
            <option value="-400">Mencuri SP3</option>

        </select>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Ubah</button>
      </div>
    </form>
    </div>
  </div>
            </div>

        <!-- modal hargai -->


        <?php
        endwhile;
        ?>
        </table>
    </div>

    </main>

