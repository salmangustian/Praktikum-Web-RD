<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
         <meta name="descriptions" content="Soal 3">
         <meta name="author" content="Salman 119140053">
         
        <!--Menggunakan tag title-->
        <title>Soal 3 - Minggu 5 Salman</title>
        <link rel="stylesheet" type="text/css" href="./index_119140053.css">
    </head>

<body>
<div class="position">
                <div class="prima">
                    <p>Program untuk mencari bilangan prima dari 1 sampai 50</p>
                    <?php
                        function prima(){                        
                            for($i=1;$i<=50;$i++){
                                $bil=0;
                                for($j=1;$j<=$i;$j++){
                                    if($i%$j==0){
                                        $bil++;
                                    }
                                }
                                if($bil==2){
                                    echo $i.' ';
                                }
                            }
                        } 
                        
                        prima();
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

