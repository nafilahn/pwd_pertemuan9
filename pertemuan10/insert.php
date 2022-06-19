<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data</title>
</head>
<body>
    <h3>Form Tambah Data</h3>
    <!-- action = kosong krn ketika data disubmit akan dikembalikan ke halaman yg sama-->
    <form method="post" action="proses_simpan.php" enctype="multipart/from-data">
        <ul>
            <li>
                <label>
                    NIM :
                    <input type="text" name="nim" autofocus required>
                </label>
            </li>
            <li>
                <label>
                    Nama :
                    <input type="text" name="nama">
                </label>
            </li>
            <li>
                <label>
                    Prodi :
                    <input type="text" name="prodi">
                </label>
            </li>
            <li>
                <label>
                    Foto :
                    <input type="file" name="file">
                </label>
            </li>
            <li>
                <input type="submit" name="tambah" value="Tambah">
            </li>
        </ul>
    </form>
    <!-- post $_POST : mengirim data ke server / datanya tertutup (form, password)
         get $_GET : mengirim data ke url browser / datanya publik (id, nama) -->
</body>
</html>