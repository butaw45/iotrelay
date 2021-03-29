<?php
    //! FileUntuk feedback ke NodeMCU
    //Koneksi database
    $konek = mysqli_connect("localhost","root","","dbiotrelay");

    //baca status jam
    $sql = mysqli_query($konek,"SELECT * FROM jam WHERE status=1");
    //Jika ada datanya , maka infokan ke NodeMCU RelayHigh
    if(mysqli_num_rows($sql) > 0) {

        //infokan ke NodeMCU, RelayHigh
        echo "RelayHigh";
    }
?>