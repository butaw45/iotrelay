<?php
    //koneksi ke database
    $koneks = mysqli_connect("localhost","root","","dbiotrelay");
    //update status semua jam menjadi 0
    mysqli_query($koneks,"UPDATE jam set status=0");
?>