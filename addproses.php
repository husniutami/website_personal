<?php
include('koneksi.php');
if (isset($_POST['tambah'])){
    $a = $_POST['kodemk'];
    $b = $_POST['namamk'];
    $c = $_POST['jampelajaran'];
    $d = $_POST['sks'];

    $sql ="insert into matakuliah (kodemk, namamk, jampelajaran,
sks) values ('$a','$b','$c','$d')";
    $query = mysqli_query ($db, $sql);

if ($query){
                header('location:index.php');
}
else {
    echo 'Gagal';
}}
?>