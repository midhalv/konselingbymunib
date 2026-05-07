<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit;
}

$conn = mysqli_connect("localhost","root","","konseling");

$data = mysqli_query($conn, "SELECT * FROM konsultasi ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard Admin</title>

<style>
body{
    font-family:Arial;
    background:#f4f4f4;
    padding:20px;
}

h2{
    margin-bottom:20px;
}

table{
    width:100%;
    border-collapse:collapse;
    background:white;
}

th,td{
    padding:12px;
    border:1px solid #ddd;
}

th{
    background:#7a0000;
    color:white;
}
</style>

</head>

<body>

<h2>📋 Data Konseling Mas Munib</h2>

<table>
<tr>
    <th>Nama</th>
    <th>Umur</th>
    <th>Alamat</th>
    <th>Keluhan</th>
    <th>Jadwal</th>
    <th>Waktu Input</th>
</tr>

<?php while($row = mysqli_fetch_assoc($data)) { ?>
<tr>
    <td><?= $row['nama']; ?></td>
    <td><?= $row['umur']; ?></td>
    <td><?= $row['alamat']; ?></td>
    <td><?= $row['keluhan']; ?></td>
    <td><?= $row['jadwal']; ?></td>
    <td><?= $row['created_at'] ?? '-'; ?></td>
</tr>
<?php } ?>

</table>

</body>
</html>