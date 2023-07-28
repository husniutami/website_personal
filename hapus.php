<?php
    include "koneksi.php";
    $id = $_GET['kodemk'];
    $sql = ("delete from matakuliah where kodemk= '$id'");
    $query = mysqli_query($db,$sql);
    header ('location:index.php');
?>