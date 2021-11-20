<html>
    <head>
        <title>Minggu 6 - 119140053</title>
    </head>
    <link rel="stylesheet" type="text/css" href="./119140053_style.css">

    <body>
        <div id="background">
        
        <form onsubmit="calc()">
            <pre>
            <h3>Toko Buah</h3><br>
            Mangga
            <input type="number" id="mangga" name="mangga"><br>
            Jambu
            <input type="number" id="jambu" name="jambu"><br>
            Salak
            <input type="number" id="salak" name="salak"><br><br>
            <input type=submit name="submit">
            <div id="hasil"></div>
            </pre>
        </form>

        <script type="text/javascript">
            function calc(){
                event.preventDefault()
                var jumlahMangga=document.getElementById('mangga').value;
                var jumlahJambu=document.getElementById('jambu').value;
                var jumlahSalak=document.getElementById('salak').value;
                var total = jumlahMangga * 15000 + jumlahJambu * 13000 + jumlahSalak * 10000; 
                output = document.getElementById('hasil');
                output.innerHTML = "Total Belanja = "+ total;
            }

            <?php
            class mangga{
                public $harga;
                public function __construct($jumlah){
                    $this->jumlah = $jumlah;
                    $this->harga= 15000;
                }
                public function jumlahMangga(){
                    return $this->jumlah;
                }
                public function hargaMangga(){
                    return $this->harga;
                }
            }

            class jambu{
                public $harga;
                public function __construct($jumlah){
                    $this->jumlah = $jumlah;
                    $this->harga= 13000;
                }

                public function jumlahJambu(){
                    return $this->jumlah;
                }
                
                public function hargaJambu(){
                    return $this->harga;
                }
            }

            class salak{
                public $harga;
                public function __construct($jumlah){
                    $this->jumlah = $jumlah;
                    $this->harga= 10000;
                }

                public function jumlahSalak(){
                    return $this->jumlah;
                }
                
                public function hargaSalak(){
                    return $this->harga;
                }
            }
            ?>
        </script>
        </div>
    </body>
    <div class="copyright-author">
    <div class="vert-align">
    <p class="headline">
      &copy; 2021 | Salman Illiyin Gustian 119140053</p>
    </div>
</div>
</html>