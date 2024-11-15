<?php
//panggil koneksi database
include "connect.php";
//uji jika tombol simpan diklik
if (isset($_POST['btnlogin'])) {
    //persiapan simpan data
    $simpan = mysqli_query($koneksidb, "INSERT INTO tb_ak10(Nama,Skor,Kelas)
        VALUES ('$_POST[Nama]','$_POST[Skor]','$_POST[Kelas]')");

    //jika simpan sukses
    if ($simpan){
        echo "<script> alert ('Berhasil Simpan Registrasi')</script>";
        echo "<script> window.location.href='inputform.php'</script>";
    } else {
        echo "<script> alert ('Gagal Simpan Registrasi')</script>";
        echo "<script> window.location.href='inputform.php'</script>";
    }
}
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
    a{
        text-decoration: none;
        display: flex;
        margin: auto;
    }
    a .red{
        background-color: red;
        margin: auto;
        align-items: center;
        height: 380px;
        width: 300px;
        margin-top: 100px;
        border-radius: 25px;
        text-align: center;
        border: 15px solid red;
    }
    a .red h1{
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        color: aliceblue;
        font-style: italic;
        text-decoration: none;

    }
    a .blue{
        background-color: blue;
        margin: auto;
        align-items: center;
        height: 380px;
        width: 300px;
        margin-top: 100px;
        border-radius: 25px;
        text-align: center;
        border: 15px solid blue;
    }
    a .blue h1{
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        color: aliceblue;
        font-style: italic;
        text-decoration: none;
    }
    .select{
        display: flex;
    }


    </style>
</head>
<body>

    <header>
        <div>
            
            <h1>Login Murid</h1>
        </div>
    </header>
    <main>
        
        <div class="container">
            <h2 class="text-center mt-3">Silahkan memasukan data diri</h2>
        <form name="form1" method="POST">
            <div class="col-md-6 mx-auto">
                <!-- Nama -->
                <div class="mb-3 mt-3">
                <label for="Nama">Nama:</label><br>
                <input type="text" placeholder="Nama" name="Nama" required class="form-control">
                </div>

                <!-- Password -->
                <div class="mb-3">
                <label for="Password">Password:</label><br>
                <input type="password" placeholder="Password" name="Password" required class="form-control">
                </div>

                <!-- Kelas -->
                <select name="Kelas">
                    <option value="10ak">10 AK</option>
                </select>

                <!-- skor -->
                <div class="mb-3">
                <label for="Skor">Skor:</label><br>
                <input type="number" disabled name="Skor" required class="form-control" value="0">
                </div>


                <a href="AK10m.php"><button type="submit" name="btnlogin" class="btn btn-primary col-md-12 mb-3">Masuk</button></a><br>
                <button type="reset" class="btn btn-danger col-md-12">Hapus</button>
                

            </div>
            <a href="index.php"><button class="btn btn-warning mt-3"><-Return</button></a>
        </form>
        </div>
    </main>
