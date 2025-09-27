/* 2. Buat sebuah variabel yang berisi json, lalu decode variabel tersebut ke dalam bentuk PHP
Object dan PHP Array, kemudian akses nilai pada variabel hasil decode tersebut masingmasing.*/
<?php
$variabel = '{"nama":"Budi","umur":25,"hobi":["Olahraga","Musik","Makan"]}';

// Decode ke dalam bentuk Object (default)
$obj = json_decode($variabel);
echo "Hasil Decode ke Object:<br>";
echo "Nama: " . $obj->nama . "<br>";        
echo "Umur: " . $obj->umur . "<br>";
echo "Hobi pertama: " . $obj->hobi[0] . "<br><br>";

// Decode ke dalam bentuk Array (assoc = true)
$arr = json_decode($variabel, true);
echo "Hasil Decode ke Array:<br>";
echo "Nama: " . $arr["nama"] . "<br>";      
echo "Umur: " . $arr["umur"] . "<br>";
echo "Hobi kedua: " . $arr["hobi"][1] . "<br>";

?>
