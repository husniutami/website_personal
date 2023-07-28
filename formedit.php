<h2> EDIT DATA MATA KULIAH </h2>
<form method="post" action= "edit.php">
<?php
include('koneksi.php');
$id = $_GET['kodemk'];
$row = mysqli_query($db, "select * from matakuliah where kodemk = '$id'")
or die (mysql_error());
$query = mysqli_fetch_array ($row);
?>
<table>
    <tr>
        <td>Kode Mata Kuliah</td>
        <td>:</td>
        <td><input name="kodemk" value="<?php echo $query['kodemk'];?>" 
    size="15"> </td>
    </tr>

    <tr>
        <td>Nama Mata Kuliah</td>
        <td>:</td>
        <td><input name="namamk" value="<?php echo $query['namamk'];?>"
    size="15"> </td>
    </tr>

    <tr>
        <td>Jam Pelajaran</td>
        <td>:</td>
        <td><input name="jampelajaran" value="<?php echo
    $query['jampelajaran'];?>" size="10"> </td>
    </tr>

    <tr>
        <td>SKS</td>
        <td>:</td>
        <td><input name="sks" value="<?php echo $query['sks'];?>" size="10">
        </td>
    </tr>

    <tr>
        <td height="42"></td>
        <td></td>
        <td><input type="submit" name="update" value = "UPDATE"></td>
    </tr>
</table>
    </form>