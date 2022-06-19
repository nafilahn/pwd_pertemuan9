<?php
    require 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>List Data Mahasiswa</h1>
    <a href="insert.php">Tambah Data</a>
    <table class="table table-hover" border="1">
        <!-- baris header -->
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Aksi</th>
        </tr>

        <!-- baris header -->
        <!-- looping -->
        <?php $i = 1;
        $query = mysqli_query($konek, "SELECT * from mahasiswa");
        while ($row = mysqli_fetch_array($query)){
            ?>
        <tr>
            <td><?= $i;?></td>
            <td><?php echo "<img src='img/$row[foto]' width='100' height='auto'/>";?></td>
            <td><?=$row['nim']; ?></td>
            <td><?=$row['nama']; ?></td>
            <td><?=$row['prodi']; ?></td>
            <td>
                <a href="update.php?nim=<?= $row['nim']; ?>">Ubah</a> &nbsp;&nbsp; 
                <a href="delete.php?id=<?= $row['id'];?>" onClick="return confirm('Apakah Yakin Akan Dihapus?')">Hapus</a>
            </td>
        </tr>
            <?php
            $i++;
        }
        ?>
    </table>
</body>
</html>