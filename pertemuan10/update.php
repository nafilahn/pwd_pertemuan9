<?php
include 'koneksi.php';
// menampilkan data tersimpan
$mhs = $_GET['nim'];
$query = "SELECT * FROM mahasiswa WHERE nim = '$mhs'";
$file = mysqli_query($konek, $query);
$data = mysqli_fetch_array($file);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Update Data</title>
    </head>
    <body>
        <h3>Form Update Data </h3>
        <form method="post" action="proses_ganti.php">
            <ul>
                <li>
                    <label>
                        NIM:
                        <input type="text" name="nim" value="<?php echo $data['nim']; ?>" readonly>
                    </label>
                </li>
                <li>
                    <label>
                        Nama:
                        <input type="text" name="nama" value="<?php echo $data['nama']; ?>">
                    </label>
                </li>
                <li>
                    <label>
                        Prodi:
                        <input type="text" name="prodi" value="<?php echo $data['prodi']; ?>">
                    </label>
                </li>
                <li>
                    <label>
                        Foto:
                        <input type="file" name="file" value="<?php echo $img['foto']; ?>">
                    </label>
                </li>
                <li>
                    <input type="submit" name="tambah" value="Ganti">
                </li>
            </ul>
        </form>
    </body>
</html>