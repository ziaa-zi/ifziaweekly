    

<?php
    require "fungsi.php";
    //(echo"") untuk ngeprint
    //($nama) $untuk tipe data dan nama variabel nya 
    //(foreach) untuk perulangan 
    //($nama []) untuk array
    //function
    
    
    
    $qmahasiswa = "SELECT * FROM mahasiswa";
    $mahasiswas = tampildata($qmahasiswa); //array isi data mahasiswa
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa | Informatika 2026</title>
</head>
<body>
    <h1>INFORMATIKA 2026</h1>
    <table border="1" cellspacing="0" cellpadding="10px">
        <tr>
            <td><a href="index.php">Home</a></td>
            <td><a href="profile.php">Profile</a></td>
            <td><a href="contact.php">Contact</a></td>
            <td><a href="mahasiswa.php">Data Mahasiswa</a></td>
        </tr>
    </table>
    <br>
    <hr/>
    <h2>Data Mahasiswa</h2>
    <a href="tambahdata.php">
        <button>Tambah Data</button>
    </a>
    <table border="1" cellpadding="10px">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>No. HP</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
        <?php
            $i = 1;
           foreach($mahasiswas as $mhs)
            {
        ?>
        <tr>
            <td align="center"><?= $i ?></td>
            <td><?php echo $mhs ["nama"] ?></td>
            <td><?php echo $mhs ["nim"] ?></td>
            <td><?= $mhs ["jurusan"] ?></td>
            <td><?= $mhs ["email"]?></td>
            <td><?= $mhs ["no_hp"]?></td>
            <td><img src="asset/images/<?= $mhs["foto"] ?>" alt="foto" width="60px"></td>
            <td>
                <a href="editdata.php"><button>Edit</button></a> | 
                <a href="hapusdata.php?id=<?= $mhs["id"] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')";><button>Hapus</button></a>
            </td>
        </tr>
        <?php
            $i++;
            }
        ?>
    <!-- </table>
    <br>
    <hr/>
    <table border="1"cellspacing="0" callpadding="10">
        <tr>
            <th>1,1</th>
            <th>1,2</th>
            <th>1,3</th>
            <th>1,4</th>
        </tr>
        <tr>
            <td>2,1</td>
            <td colspan="2" rowspan="2"></td>
            <td>2,4</td>
        </tr>
        <tr>
            <td>3,1</td>
            <td>3,4</td>
        </tr>
        <tr>
            <td>4,1</td>
            <td>4,2</td>
            <td>4,3</td>
            <td>4,4</td>
        </tr>
    </table> -->
</body>
</html>