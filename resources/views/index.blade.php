<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Background Image Example</title>
<style>
  body {
    background-color: #0F1C2F; 
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
   /* overflow: hidden; mengapus scroll */
  }

  /* Bagian untuk background gambar */
  .background {
    position: relative;
    width: 100%;
    height: 100vh; 
    background-image: url('{{ asset('images/homepage.jpg') }}'); 
    background-size: cover; /* menjadikan Gambar menutupi seluruh area */
    background-position: center;
    background-repeat: no-repeat;
  }

  
  .container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%); /* Untuk memposisikan konten tepat di tengah */
    text-align: center;
    color: white; 
  }

  h1 {
    font-size: 38px;
    margin-bottom: 20px;
  }

  .button-container {
    margin-top: 30px;
    display: flex;
    justify-content: center;
  }

  .button {
    display: inline-block;
    padding: 15px 30px;
    background-color: #0F1C2F; 
    color: white;
    text-decoration: none;
    border-radius: 5px;
    margin: 0 10px; 
    transition: background-color 0.3s; /*  transisi saat dihover */
  }

  .button:hover {
    background-color: #6495ED; 
  }

  .menu {
    background-color: #0F1C2F(205, 180, 219, 0.8); 
    padding: 10px;
    text-align: center;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 100; /* Menu tetap di atas */
  }

  .menu a {
    color: white; 
    text-decoration: none;
    padding: 10px 20px;
    margin: 0 10px; 
    font-weight: bold;
  }

  .menu a:hover {
    text-decoration: underline; 
  }
</style>
</head>
<body>

<!-- Menu navigasi -->
<div class="menu">
  <a href="#">PERATURAN</a>
  <a href="#">FASILITAS</a>
  <a href="#">GALERI</a>
  <a href="#">KONTAK</a>
</div>


<!-- Background dengan konten di tengah -->
<div class="background">
  <div class="container" src="{{ asset('images/homepage.jpg') }}">
    <h1>HUNIAN AMAN DAN NYAMAN</h1>
    <div class="button-container">
      <a href="{{ route('login') }}" class="button">Login</a>
      <a href="{{ route('register') }}" class="button">Daftar</a>
    </div>
    <a href="{{ route('dashboard') }}" style="color: blue">masuk sebagai pengunjung</a>
  </div>
</div>

</body>
</html>
