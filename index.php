<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Layanan Konseling Gratis! By Mas Munib</title>

  <style>
    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
      font-family: Arial, Helvetica, sans-serif;
    }

    body{
      background:#5b0000;
      color:white;
      overflow-x:hidden;
    }

    .hero{
      min-height:100vh;
      background:linear-gradient(
        rgba(80,0,0,0.92),
        rgba(120,0,0,0.95)
      );
      display:flex;
      align-items:center;
      justify-content:center;
      padding:40px 20px;
    }

    .container{
      max-width:1100px;
      width:100%;
      display:grid;
      grid-template-columns:1fr 1fr;
      gap:40px;
      align-items:center;
    }

    .left{
      position:relative;
    }

    .logo{
      width:100px;
      margin-bottom:20px;
    }

    .left h4{
      font-size:22px;
      color:#ffcf9d;
      margin-bottom:10px;
      letter-spacing:2px;
      position:relative;
      z-index:2;
    }

    .left h1{
      font-size:65px;
      line-height:1.1;
      margin-bottom:20px;
      text-transform:uppercase;
      text-shadow:0 5px 10px rgba(0,0,0,0.4);
      position:relative;
      z-index:2;
    }

    .konselor{
      width:470px;
      position:absolute;
      right:-120px;
      top:20px;
      opacity:0.18;
      filter:grayscale(10%);
      pointer-events:none;
    }

    .left p{
      font-size:18px;
      line-height:1.8;
      color:#f1dada;
      margin-bottom:25px;
      position:relative;
      z-index:2;
    }

    .btn{
      display:inline-block;
      padding:15px 30px;
      background:white;
      color:#7a0000;
      text-decoration:none;
      border-radius:50px;
      font-weight:bold;
      transition:0.3s;
      position:relative;
      z-index:2;
    }

    .btn:hover{
      transform:translateY(-3px);
      background:#ffd9d9;
    }

    .card{
      background:rgba(255,255,255,0.08);
      border:1px solid rgba(255,255,255,0.15);
      padding:30px;
      border-radius:25px;
      backdrop-filter:blur(8px);
      box-shadow:0 10px 30px rgba(0,0,0,0.3);
      position:relative;
      z-index:2;
    }

    .card h2{
      margin-bottom:20px;
      font-size:32px;
      color:#ffd5d5;
    }

    .info{
      margin-bottom:18px;
      padding:15px;
      background:rgba(255,255,255,0.06);
      border-radius:15px;
    }

    .info span{
      display:block;
      font-size:14px;
      color:#ffc9c9;
      margin-bottom:5px;
    }

    .info b{
      font-size:18px;
    }

    .quote{
      margin-top:25px;
      font-style:italic;
      color:#ffeaea;
      line-height:1.7;
    }

    footer{
      text-align:center;
      padding:20px;
      background:#430000;
      color:#ffd7d7;
      font-size:14px;
    }

    @media(max-width:850px){

      .container{
        grid-template-columns:1fr;
        text-align:center;
      }

      .left h1{
        font-size:45px;
      }

      .konselor{
        position:static;
        width:260px;
        margin-top:20px;
      }
    }

  </style>
</head>

<body>

<section class="hero">
  <div class="container">

    <div class="left">

      <img src="white-logo.png" class="logo">

      <h4>Layanan Konseling Online</h4>

      <h1>
        Layanan <br>
        Konseling Gratis!
      </h1>

      <img src="foto konselor.jpeg" class="konselor">

      <p>
        Tempat aman untuk bercerita tanpa takut dihakimi.
        Ceritakan bebanmu, keluh kesahmu, dan temukan solusi terbaik bersama Mas Munib.
      </p>
      </a>
<a href="kontak.php" class="btn">
  Daftar Sekarang
</a>
    </div>

    <div class="card">

      <h2>Bersama Mas Munib</h2>

      <div class="info">
        <span>Metode Konseling</span>
        <b>Online / Chat / Video Call</b>
      </div>

      <div class="info">
        <span>Fokus Layanan</span>
        <b>Konseling Individu & Keluarga</b>
      </div>

      <div class="info">
        <span>Privasi</span>
        <b>100% Rahasia & Aman</b>
      </div>

      <div class="info">
        <span>Jam Layanan</span>
        <b>08:00 - 22:00 WIB By : *Hanya dengan janji temu</b>
      </div>

      <p class="quote">
        “Tidak semua luka terlihat. Kadang seseorang hanya butuh didengarkan.”
      </p>

    </div>

  </div>
</section>

<footer>
  © 2026 Layanan Konseling Gratis! By Mas Munib
</footer>

</body>
</html>