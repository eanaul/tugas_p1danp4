<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$server = mysqli_connect("localhost", "root", "", "tugas");
$sql = "SELECT * from tugas_cuy";

$result = mysqli_query($server, $sql);

if(mysqli_num_rows($result) > 0){
    while($display = mysqli_fetch_assoc($result)){
        echo "Nama: " . $display["nama"];
        echo "<br>";
        echo "Rombel: " . $display["rombel"];
        echo "<br>";
        echo "Nis: " . $display["nis"];
        echo "<br>";
        echo "rayon: " . $display["rayon"];
        echo "<br>";
        
    }
}

?>
</body>
</html>