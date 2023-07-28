<h1> FORMULIR TAMBAH DATA MATA KULIAH</h1>
<form method = "post" action="addproses.php">
<table>
    <tr>
        <td>Kode mata Kuliah</td>
        <td>:</td>
        <td> <input type="text" name = "kodemk" size="30"> </td>
    </tr>
    
    <tr>
        <td>Nama Mata Kuliah</td>
        <td>:</td>
        <td> <input name = "namamk" type="text" size="30" height="30">
        </td>
    </tr>
    
    <tr>
        <td>Jam Pelajaran</td>
        <td>:</td>
        <td><input name = "jampelajaran" type="text" size="30"
        height="30"> </td>
    </tr>

    <tr>
        <td>SKS</td>
        <td>:</td>
        <td> <input name = "sks" type="text" size="10" height="10">
        </td>
    </tr>

    <tr>
        <td height="42"></td>
        <td></td>
        <td> <input type="submit" name="tambah" value = "TAMBAH"></td>
    </tr>
</table>
    </form>