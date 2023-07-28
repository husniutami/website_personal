<?php
    include "koneksi.php";
    if (isset($_POST['update']) )
        {
        $a = $_POST['kodemk'];
        $b = $_POST['namamk'];
        $c = $_POST['jampelajaran'];
        $d = $_POST['sks'];
    
    $sql = ("UPDATE matakuliah SET namamk ='$b', jampelajaran
            ='$c', sks ='$d' where kodemk='$a'");

    $query = mysqli_query($db, $sql);
        if ($query){
            header('location:index.php');
                    }
    else {
        echo 'Gagal menyimpan data';

        }

    }
?>