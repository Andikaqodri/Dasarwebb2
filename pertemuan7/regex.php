<?php
$pattern = '/[a-z]/'; // cocokkan huruf kecil
$text = 'This is a Sample Text.';
if(preg_match($pattern, $text)){
     echo "Huruf kecil ditemukan! <br>";
 }else{
    echo "Tidak ada huruf kecil <br>";
 }
?>