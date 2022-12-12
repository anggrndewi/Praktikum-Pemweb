<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa ITERA</title>
</head>
<body>
    <table border='1'>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>Program Studi</th>
        </tr>
    
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dewia";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$id_cekprodi = $_POST['cekprodi'];
$sql = "SELECT * FROM mahasiswa where prodi = '$id_cekprodi'"; 
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { //perulangan
    $No = 1;
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) { //looping
      ?>
    <tr>
        <td> <?php echo $No++ ?></td>
        <td> <?php echo $row['nim']?></td>
        <td> <?php echo $row['nama']?></td>
        <td> <?php echo $row['prodi']?></td>
<?php
  }
} 
?>
</table>
</body>
</html>