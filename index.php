<!DOCTYPE html>
<html>
<head>
    <title>Tampilan MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
<h2> Data Mata Kuliah </h2>
<?php include "koneksi.php";?>

<a href="add.php">Tambah Data Mata Kuliah</a>
<table border="1">
    <tr>
        <th>No</th>
        <th>Kode Mata Kuliah</th>
        <th>Nama Mata Kuliah</th>
        <th>Jam Pelajaran</th>
        <th>SKS</th>
    </tr>
<?php
    $i = 0;

    $hasil = mysqli_query($db,'select * from matakuliah') or die
    (mysql_error());
    $data = mysqli_num_rows($hasil);
    if ($data> 0){
    while($row = mysqli_fetch_array($hasil,))
    {
    $i++;
    ?>
    <tr>
        <td> <?php echo "$i";?></td>
        <td> <?php echo $row ['kodemk'];?></td>
        <td> <?php echo $row ['namamk'];?></td>
        <td> <?php echo $row ['jampelajaran'];?></td>
        <td> <?php echo $row ['sks'];?></td>

        <td><a href='formedit.php?kodemk=<?php echo $row['kodemk']; ?>' > Edit </a></td>

        <td><a href='hapus.php?kodemk=<?php echo $row['kodemk']; ?>'
    onclick='return confirm ("Are You Sure?")'> Delete </a></td>
    </tr>
<?php } } ?>
    </table>