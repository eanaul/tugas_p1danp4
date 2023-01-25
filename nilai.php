<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai</title>
</head>
<body>
    <?php

$server = mysqli_connect("localhost", "root", "", "tugas");

if ( $_SERVER ['REQUEST_METHOD'] ==  "POST") {


$mapel1 = $_POST  ['mapel1'];
$mapel2 = $_POST  ['mapel2'];
$mapel3 = $_POST  ['mapel3'];
$mapel4 = $_POST  ['mapel4'];
$mapel5 = $_POST  ['mapel5'];
$mapel6 = $_POST  ['mapel6'];
$mapel7 = $_POST  ['mapel7'];
}

    $sql = "insert into nilai_cuy(sejarah, indo, inggris, mtk, inf, ipa, ips)
    values('$mapel1', '$mapel2', '$mapel3', '$mapel4', '$mapel5', '$mapel6', '$mapel7')";
    if(mysqli_query($server, $sql)){
        echo"berhasil";
    }else{
        echo "gagal";
    }

?>
</body>
</html>