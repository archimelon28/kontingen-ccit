<!DOCTYPE html>
<html>
<head>
  <title> Login | anak-it.web.id</title>
</head>
<body>
  <center>
    <h1></h1>
    <h3>Login Admin</h3>
  </center>
  <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
<?php foreach($konfirmasi as $k){
  if($k==2){
  ?>
  <center><font color="red">Invalid Username or Password !</font></center>
  </div>
  <?php } 
  } ?>
  <?php echo form_open('utama/masuk'); ?>
    <table style="margin:20px auto;">
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
        <td><input type="submit" value="Login"></td>
      </tr>
    </table>
  </form>  
</body>
</html>