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
