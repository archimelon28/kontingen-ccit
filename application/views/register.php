<!DOCTYPE html>
<html>
<head>
  <title>Daftar Admin Baru | anak-it.web.id</title>
</head>
<body>
  <center>
    <h1>Daftar Admin</h1>
  </center>
  <?php echo form_open('utama/addAdmin'); ?>
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
        <td><select name="jenis_kelamin">
                    <option value="1">Pria</option>
                    <option value="2">Wanita</option>
                </select></td>
      </tr>
      <tr>
        <td>Username</td>
        <td><input type="text" name="username"></td>
      </tr>
      <tr>
      <td>Password</td>
        <td><input type="password" name="password"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Tambah"></td>
      </tr>
    </table>
  </form>  
</body>
</html>