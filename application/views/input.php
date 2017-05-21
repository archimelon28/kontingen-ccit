<!DOCTYPE html>
<html>
<head>
  <title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
  <center>
    <h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1>
    <h3>Tambah data baru</h3>
  </center>
  <?php echo form_open('utama/tambah_aksi');?>
    <table style="margin:20px auto;">
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat"></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td><select name="jk">
                    <option value="1">Pria</option>
                    <option value="2">Wanita</option>
                </select></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Tambah"></td>
      </tr>
    </table>
  </form>  
</body>
</html>