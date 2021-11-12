<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
         <meta name="descriptions" content="Soal 1">
         <meta name="author" content="Salman 119140053">
         
        <!--Menggunakan tag title-->
        <title>Soal 1 - Minggu 5 Salman</title>
        <link rel="stylesheet" type="text/css" href="./index_119140053.css">
    </head>

<body>
<div class="position">
        <?php
        // if(isset($_POST['operator'])){
        //     $a = $_POST['a'];
        //     $b = $_POST['b'];
        //     $hasil = '';
        // }

        function pertambahan($a, $b){
            // if(isset($_POST['pertambahan'])){
                $hasil = $a + $b;
                echo "PENJUMLAHAN <br>";
                echo "Operator : + <br>";
                echo "Hasil : ".$hasil;
            // }
            
        }

        function pengurangan($a, $b){
            // if(isset($_POST['pengurangan'])){
                $hasil = $a - $b;
                echo "PENGURANGAN <br>";
                echo "Operator : - <br>";
                echo "Hasil : ".$hasil;
            //}
        }

        function perkalian($a, $b){
            // if(isset($_POST['perkalian'])){
                $hasil = $a * $b;
                echo "PERKALIAN <br>";
                echo "Operator : * <br>";
                echo "Hasil : ".$hasil;
            // }
        }

        function pembagian($a, $b){
            // if(isset($_POST['pembagian'])){
                $hasil = $a / $b;
                echo "PEEMBAGIAN <br>";
                echo "Operator : / <br>";
                echo "Hasil : ".$hasil;
            // }
        }
            
        function mod($a, $b){
            // if(isset($_POST['mod'])){
                $hasil = $a % $b;
                echo "MOD <br>";
                echo "Operator : % <br>";
                echo "Hasil : ".$hasil."<br>";
            // }    
        }

        $a = 10; 
        $b = 5;
        ?>
        <?php echo "Bil 1 = $a"; ?> <br>
        <?php echo "Bil 2 = $b"; ?> <br><br>
        <?php echo "Berikut adalah hasil dari setiap operasi : "; ?> <br><br>
        <?php pertambahan($a,$b); ?> <br><br>
        <?php pengurangan($a,$b); ?> <br><br>
        <?php perkalian($a,$b); ?> <br><br>
        <?php pembagian($a,$b); ?> <br><br>
        <?php mod($a,$b); ?> <br><br>
            <!-- <form action="" method="POST">
                <label for="a">Bilangan 1    :</label>
                <input type="number" name="a" id="a" required="required" value="<?php echo $a; ?>"><br><br>
                <label for="a">Bilangan 2    :</label>
                <input type="number" name="b" id="b" required="required" value="<?php echo $b; ?>" /> <br><br>
                <input type="submit" name="operator" id="operator">  
            </form> -->
</div>
</body>
<div class="copyright-author">
  <div class="vert-align">
    <p class="headline">
      &copy; 2021 | Salman Illiyin Gustian 119140053</p>
  </div>
</div>
</html>