<?php
include "connect.php";
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$prodi=$_POST['prodi'];
$angkatan=$_POST['angkatan'];
$sql = $pdo->prepare("INSERT INTO mahasiswa(nim, nama, prodi, angkatan) VALUES (:nim,:nama,:prodi,:angkatan)");
$sql->bindParam(':nim', $nim);
$sql->bindParam(':nama', $nama);
$sql->bindParam(':prodi', $prodi);
$sql->bindParam(':angkatan', $angkatan);
$execute = $sql->execute();
if($execute) {
    echo "<script>window.location.href='index.php';</script>";
    exit();
} else {
    echo "<a href='index.php'>back</a>";
}
?>