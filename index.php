<?php
$page = $_SERVER['PHP_SELF'];
$sec = "10";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Link to database</title>
</head>
<body>
    
<form method="post" action="tampil.php">
        <br>
        <label>Nama Kamu?</label><br/>
        <input type="text" name="nama"></br>
        <label>Rombel Apa?</label></br>
        <input type="text" name="rombel"></br>
        <label>NISnya?</label></br>
        <input type="text" name="nis"></br>
        <label>Rayon Apa?</label></br>
        <input type="text" name="rayon"></br>
        <br>
        <input type="submit" value="Daftar">
    </form>

<hr>

    <table>
        <form action="nilai.php" method="post">
        <tr>
            <td>Sejarah</td>
            <td><input type="number" name = "mapel1"> </input></td>
        </tr>
        <tr>
            <td>Bahasa Indonesia</td>
            <td><input type="number" name = "mapel2"> </input></td>
        </tr>
        <tr>
            <td>Bahasa Inggris</td>
            <td><input type="number" name = "mapel3"> </input></td>
        </tr>
        <tr>
            <td>Matematika</td>
            <td><input type="number" name = "mapel4"> </input></td>
        </tr>
        <tr>
            <td>Informatika</td>
            <td><input type="number" name = "mapel5"> </input></td>
        </tr>
        <tr>
            <td>IPA</td>
            <td><input type="number" name = "mapel6"> </input></td>
        </tr>
        <tr>
            <td>IPS</td>
            <td><input type="number" name = "mapel7"> </input></td>
        </tr>
        </table>
        <br>

        <div class="button">
            <input class="btn" type="submit" name = "submit">      </input> 
        </div>

</div>
</div>
    

</body>
</html>