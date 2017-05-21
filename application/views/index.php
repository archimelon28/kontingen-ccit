<!DOCTYPE html>
<html>
<head>
  <title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
<br><br>
  <center><h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1></center>
  <br> <br>
  <h3><center><a href="<?php echo base_url()?>utama/tambahdata">Tambah Data</a></center></h3>
  <table style="margin:20px auto;" border="1">
  <thead>
    <tr>
      <th>Id Admin</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Jenis Kelamin</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $no = 1;
    foreach($user->result() as $u){ 
    ?>
      <td><?php echo $u->id_admin ?></td>
      <td><?php echo $u->nama ?></td>
      <td><?php echo $u->alamat ?></td>
      <td>
        <?php if($u->jenis_kelamin==1) { ?>
                  <p>Pria</p>
                <?php } ?>
                <?php if($u->jenis_kelamin==2) { ?>
                  <p>Wanita</p>
                <?php } ?>
            </td>
      <td>
            <a href="<?php echo base_url()?>utama/ubahdata/<?php echo $u->id_admin ?>">Ubah Data</a>
                  <a href="<?php echo base_url()?>utama/hapusdata/<?php echo $u->id_admin ?>">Hapus Data</a>
      </td>
    
    </tbody>
    <?php $no++; } ?>
  </table>