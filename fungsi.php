<?php
$koneksi = mysqli_connect("localhost","root","root","ifziaweekly");
//"localhost" menandakan tempat server nya
    //root pertama nama sql nya
    //root kedua untuk password mysql
    //ifziaweekly untuk nama database nya

    //if($koneksi)
    //{
    //   echo "Koneksi Berhasil!";
    //}
    function tampildata($query)
    {
        global $koneksi;
        $result = mysqli_query($koneksi,$query);

        $rows = [];
        while($row = mysqli_fetch_assoc($result))
        {
            $rows[] = $row;
        }

        return $rows;
    }
    function tambahdata($data)
    {
        global $koneksi;
        $nama = htmlspecialchars($data["name"]);
        $nim = htmlspecialchars($data["nim"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $email = htmlspecialchars($data["email"]);
        $nohp = htmlspecialchars($data["no_hp"]);
        $foto = $data["foto"];

        $query = "INSERT INTO mahasiswa
        (nama,nim,jurusan,email,no_hp,foto) VALUES
        ('$nama', ' $nim', '$jurusan', ' $email', ' $nohp', '$foto')";

        mysqli_query($koneksi,$query);
        return mysqli_affected_rows($koneksi);
    }

    function hapusdata($id)
    {
        global $koneksi;

        $query = "DELETE FROM mahasiswa WHERE id=$id";

        mysqli_query($koneksi,$query);
        return mysqli_affected_rows($koneksi);
    }    
    //ambil data (fetch) dari lemari mahasiswa
    //mysqli_fetch_row untuk data tipe array numeric (index)
    //mysqli_fetch_assoc
    //mysqli_fetch_object
    //mysqli_fetch_array

    //$mhs = mysqli_fetch_row($result);
    //{
    //    var_dump($mhs [1]);
    //}

    // $mhs = mysqli_fetch_assoc($result);
    //{
    //    var_dump($mhs["nama"]);
    //}
?>
