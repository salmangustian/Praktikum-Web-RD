<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
         <meta name="descriptions" content="Soal 2">
         <meta name="author" content="Salman 119140053">
         
        <!--Menggunakan tag title-->
        <title>Soal 2 - Minggu 5 Salman</title>
        <link rel="stylesheet" type="text/css" href="./index_119140053.css">
    </head>

<body>
<div class="position">
                <div class="sorting">
                    <p>Program untuk mengurutkan data dari 10 buah data yang acak</p>
                    <p>"Larine","Aduh","Qifuat","Toda","Anevi","Samid","Kifuat"</p>                    
                    <?php                                                           
                        $nama = array("Larine","Aduh","Qifuat","Toda","Anevi","Samid","Kifuat");
                                                
                        function sorting($nama){
                                for($i=0;$i<7;$i++){
                                for($j=$i+1;$j<7;$j++){
                                    if($nama[$i]>$nama[$j]){
                                        $cur=$nama[$i];
                                        $nama[$i]=$nama[$j];
                                        $nama[$j]=$cur;
                                    }
                                }
                            }
                            for($i=0;$i<7;$i++){
                                echo "$nama[$i]"."  ";                    
                            } 
                        }
                        
                        sorting($nama);
                    ?>
                </div>
            </div>
        </div>

</body>
<div class="copyright-author">
  <div class="vert-align">
    <p class="headline">
      &copy; 2021 | Salman Illiyin Gustian 119140053</p>
  </div>
</div>
</html>