<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prak Pemweb Tugas Minggu 7</title>
    <script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<h2> Create, Read, Update & Delete </h2>
<a href='create.php'>Tambah</a><br><br>
<table border="1" width="100%">
    <tr>
        <th>nim</th>
        <th>nama</th>
        <th>prodi</th>
        <th>angkatan</th>
        <th>Aksi</th>
        <th>Aksi</th>
    </tr>
    <?php
    include "connect.php";
    $sql = $pdo->prepare("SELECT * FROM mahasiswa");
    $sql->execute();
    while ($data = $sql->fetch()){
        echo "<tr>";
        echo "<td>".$data['nim']."</td>";
        echo "<td>".$data['nama']."</td>";
        echo "<td>".$data['prodi']."</td>";
        echo "<td>".$data['angkatan']."</td>";
        echo "<td><a href='edit.php?id=".$data['nim']."'>Edit</a></td>";
        echo "<td><a href='delete.php?id=".$data['nim']."'>Delete</a></td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>