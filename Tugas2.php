// Hasil decode data JSON di atas tampilkan ke dalam bentuk HTML Tabel seperti berikut:
<?php 
function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$send = curl("http://localhost/rekayasaweb/rekayawebproy/getWisata.php");

// ubah JSON menjadi array asosiatif
$data = json_decode($send, true);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Wisata</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
<h3>Hasil Decode Data JSON:</h3>

<table>
    <tr>
        <th>KOTA</th>
        <th>LANDMARK</th>
        <th>TARIF</th>
    </tr>

    <?php 
    foreach($data as $row){
        echo "<tr>";
        echo "<td>".$row['kota']."</td>";
        echo "<td>".$row['landmark']."</td>";
        echo "<td>".$row['tarif']."</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
