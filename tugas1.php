// 1. Buat sebuah variabel array, lalu encode ke format JSON.
<?php
$data = [
    "nama" => "Budi",
    "umur" => 21,
    "hobi" => ["Coding", "Gaming", "Membaca"]
];

// Encode ke JSON
$jsonData = json_encode($data);
echo "Hasil JSON Encode:<br>";
echo $jsonData . "<br><br>";

?>