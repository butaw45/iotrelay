<?php
    //?Koneksi ke database
    $konek = mysqli_connect("localhost","root","","dbiotrelay");
    $id = $_GET['id'];
    //TODO: Hapus data
    mysqli_query($konek,"DELETE FROM jam WHERE id='$id'");

    //kembali ke halaman utama
    echo "<script>location.replace('index.php');</script>";

?>