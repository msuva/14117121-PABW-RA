<?php
    $nama = $_POST['nama'];
    $pol = strlen($nama);
    echo "$pol <br>";
    
    if($pol > 0 && $pol < 11){
        $sum = $pol * 300;
    }else if($pol > 10 && $pol <21){
        $sum = $pol * 500;
    }else{
        $sum = $pol * 700;
    }
    
    echo "Harga: $sum";
    
    $warna = $_POST ['warna'];
    function bar($warna = "red"){
        echo '<font color = "'.$warna.'"> $nama </font><br>';
    }
    
    if($warna = "merah"){
        
    }
?>