<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quis Pertemuan 15</title>
    </head>
<h3>Form Pendaftaran Mahasiswa</h3>
<form action="quisuasoutput.php" method="post">
<form>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="radio" name="jenis" value="Pria">Pria
                <input type="radio" name="jenis" value="Wanita" >Wanita
            </td>
        </tr>
        <tr>
            <td>Prodi</td>
            <td>:</td>
            <td><select name="prodi">
                <option>Teknik Informatika</option>
                <option>Sistem Informasi</option>
            </select>
            </td>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td><input type="checkbox" name="hoby" value="Coding">Coding
            <td><input type="checkbox" name="hobi1" value="Jalan-jalan">Jalan-jalan
            <td><input type="checkbox" name="hobi2" value="Makan">Makan
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value="Kirim">
            </td>       
        </tr>    
</table>
</form>
</html>
