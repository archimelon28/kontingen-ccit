<center>
  <h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1>
  <h3>Tambah data baru</h3>
</center>
<?php foreach($admin->result() as $admins){ ?>
<?php echo form_open('utama/ubah_aksi'); ?>
  <table style="margin:20px auto;">
      
    <tr>
      <td>Nama</td>
      <td><input type="text" name="nama" value="<?php echo $admins->nama ?>"></td>
      <td><input type="hidden" name="id_admin" value="<?php echo $admins->id_admin ?>"></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td><input type="text" name="alamat"  value="<?php echo $admins->alamat ?>"></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td>
        <select name="jk">    
                    <?php if($admins->jenis_kelamin==1) { ?>
                    <option value="1">Pria</option>
                      <option value="2">Wanita</option>
                  <?php } ?>
                  <?php if($admins->jenis_kelamin==2) { ?>
                      <option value="2">Wanita</option>
                    <option value="1">Pria</option>
          <?php } ?>
        </select>
              </td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" value="Ubah"></td>
    </tr>
  </table>
</form>  
<?php }?>