<?php
$conn = mysqli_connect("localhost","root","","konseling");

if(isset($_POST['submit'])){

    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];
    $keluhan = $_POST['keluhan'];
    $jadwal = $_POST['jadwal'];

    mysqli_query($conn, "INSERT INTO konsultasi VALUES(
        '',
        '$nama',
        '$umur',
        '$alamat',
        '$keluhan',
        '$jadwal',
        NOW()
    )");

    $pesan = "Halo Mas Munib%0A%0A";
    $pesan .= "Nama : $nama%0A";
    $pesan .= "Umur : $umur%0A";
    $pesan .= "Alamat : $alamat%0A";
    $pesan .= "Keluhan : $keluhan%0A";
    $pesan .= "Jadwal : $jadwal";

    header("Location: https://wa.me/6285232259397?text=$pesan");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Konseling</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(rgba(80,0,0,0.92), rgba(120,0,0,0.95));
    color:white;
    padding:20px;
}

.box{
    width:100%;
    max-width:550px;
    padding:35px;
    border-radius:20px;
    background:rgba(255,255,255,0.08);
    border:1px solid rgba(255,255,255,0.15);
    backdrop-filter:blur(8px);
}

h2{
    font-size:32px;
    margin-bottom:10px;
}

.desc{
    font-size:14px;
    margin-bottom:20px;
    opacity:0.9;
}

label{
    display:block;
    margin:10px 0 5px;
    font-size:14px;
}

input, textarea{
    width:100%;
    padding:12px;
    border:none;
    border-radius:12px;
    margin-bottom:15px;
    background:rgba(255,255,255,0.12);
    color:white;
    outline:none;
}

textarea{
    resize:none;
}

button{
    width:100%;
    padding:14px;
    border:none;
    border-radius:50px;
    background:white;
    color:#7a0000;
    font-weight:bold;
    cursor:pointer;
}

button:hover{
    background:#ffd9d9;
}

/* 🔐 ADMIN LOGIN MINI */
.admin-login{
    margin-top:25px;
    text-align:center;
}

.admin-login h5{
    font-size:12px;
    font-weight:300;
    opacity:0.7;
    margin-bottom:10px;
}

.admin-login input{
    width:100%;
    padding:10px;
    border-radius:10px;
    border:none;
    margin-bottom:10px;
    background:rgba(255,255,255,0.1);
    color:white;
}

</style>
</head>

<body>

<div class="box">

    <h2>Form Konseling</h2>

    <p class="desc">
        Isi data dengan jujur sebelum menghubungi Mas Munib via WhatsApp.
    </p>

    <form method="POST">

        <label>Nama</label>
        <input type="text" name="nama" required>

        <label>Umur</label>
        <input type="text" name="umur" required>

        <label>Alamat</label>
        <textarea name="alamat" rows="3" required></textarea>

        <label>Keluhan</label>
        <textarea name="keluhan" rows="4" required></textarea>

        <label>Jadwal</label>
        <input type="datetime-local" name="jadwal" required>

        <button type="submit" name="submit">Kirim & WhatsApp</button>
    </form>

    <!-- 🔐 LOGIN ADMIN -->
    <div class="admin-login">
        <h5>*Login Khusus Admin</h5>

        <form action="admin/login.php" method="POST" id="adminForm">

            <!-- auto isi username -->
            <input type="text" name="username" value="konselor" readonly>

            <!-- password admin -->
            <input type="password" name="password" placeholder="" required>

        </form>
    </div>

    <script>
    document.querySelector(".admin-login input[name='password']").addEventListener("keydown", function(e){
        if(e.key === "Enter"){
            document.getElementById("adminForm").submit();
        }
    });
    </script>

</div>

</body>
</html>