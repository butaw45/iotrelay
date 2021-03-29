<?php

        //tampilkan jam otomatis
        date_default_timezone_set("Asia/Jakarta");
        // Format 24jam
        $jam = date('H:i:s');
        //!Format 12 jam 
        //!jam = date('h:i:s');
        echo $jam;

        //Koneksi ke database
        $konek = mysqli_connect("localhost","root","","dbiotrelay");

        //baca data jam yg tersimpan di database
        $sql = mysqli_query($konek,"SELECT * from jam order by id asc");
        while($data = mysqli_fetch_array($sql)){
            $id = $data['id'];
            $jamdb = $data['jam'];
            //bandingkan dengan jam saat ini
        if($jam == $jamdb){
            //TODO: Update status jam dengan nilai 1
            mysqli_query($konek, "UPDATE jam set status=1 where id='$id'");
        }
        }

?>