<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa ITERA </title>
</head>
<body>

<form>
<label for="prodi">Prodi :</label>
<select name="prodi" id="prodi">
    <option value="">Pilih Program Studi</option>
    <option value="Teknik Informatika">Teknik Informatika</option>
    <option value="Teknik Sipil">Teknik Sipil</option>
    <option value="Arsitektur">Arsitektur</option>
    <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
    <option value="Fisika">Fisika</option>
    <option value="Teknik Biomedis">Teknik Biomedis</option>
    <option value="Teknik Geofisika">Teknik Geofisika</option>
    <option value="Teknik Kimia">Teknik Kimia</option>
   </select>
</form>
<br>

<div id="tampil">
    <table border="1">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>Program Studi</th>
        </tr>
    </table>

<script src = "https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#prodi").change(function(){
                var nim=$(this).val();

            $.ajax({
                url:"tampil.php",
                type:"POST",
                data:"cekprodi=" + nim,
                success:function(data){
                    $("#tampil").html(data);
                }
            }) 
        });
        });
    </script>
</head>
</body>
</html>
