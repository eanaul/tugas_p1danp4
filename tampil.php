<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yo</title>
</head>
<body>
    
<?php
$server = mysqli_connect("localhost", "root", "", "tugas");


    if ( $_SERVER ['REQUEST_METHOD'] ==  "POST") {

        $nama = $_POST['nama'];
        $rombel = $_POST['rombel'];
        $nis = $_POST['nis'];
        $rayon = $_POST['rayon'];
    }

    $sql = "insert into tugas_cuy(nama, rombel, nis, rayon)
    values('$nama', '$rombel', '$nis', '$rayon')";
    if (mysqli_query($server, $sql)){
        echo "berhasil";
    } else{
        echo "gagal";
    }

?>

<a href="data.php">Tampil data</a>
</table>
</body>
</html>