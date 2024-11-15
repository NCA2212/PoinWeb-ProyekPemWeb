<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
            <h1>Login</h1>
        </div>
        <nav>
        </nav>
    </header>

    <main>
        <h1>Pilih Opsi Role Login</h1>
    <div class="select">
        <a href="loginadmin.php">
        <div class="red">
            <h1>ADMIN</h1>
        </div>
        </a>
        <a href="loginmurid.php">
        <div class="blue">
            <h1>MURID</h1>
        </div>
        </a>
    </div>
    </main>
</body>
</html>