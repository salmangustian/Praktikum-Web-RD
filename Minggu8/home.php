<?php 
require_once('app/db/connect.php');
$db = new Koneksi();
$conn = $db->connect();
$posts = $conn->query("SELECT * FROM post")->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laman Home - Prak PemWeb 8</title>
        <link rel="stylesheet" href="./assets/css/home.css">
        <link rel="stylesheet" href="./assets/css/iklan.css">
    </head>
    <body>
        <script src="./assets/js/iklan.js"></script>
        <div class="nav-bar">
            <a href="./index.php">Log Out</a>
        </div>
        <section class="base">
            <main>
                <?php foreach ($posts as $item) { ?>

                    <div style="width: 50%;">
                        <div class="card">
                            <div class="container">
                                <h3 class="card-head"><?= $item['judul']; ?></h3>
                                <p class="card-body"><?= $item['isi']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </main>
            <aside>
                <h2>History</h2>
                <p>Praesent eu dui. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eget magna. Suspendisse tristique neque venenatis lacus. Etiam bibendum fermentum metus. Aenean sed pede nec ante blandit viverra. Donec tempus, lorem fringilla ornare placerat, orci lacus vestibulum lorem, sit amet ultricies sem magna nec quam. Curabitur vel lectus. Cum</p>
            </aside>
        </section>
    </body>
    <div class="copyright-author">
    <div class="vert-align">
    <p class="headline">
      &copy; 2021 | Salman Illiyin Gustian 119140053</p>
    </div>
</div>
</html>