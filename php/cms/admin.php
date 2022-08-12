<?php 
  class admin
  {
    function log()
    {
     session_start();      
     if(isset($_POST['Submit'])):
        $logins = array('admin' => '123456','username1' => 'password1','username2' => 'password2');
        $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
        $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
        if(isset($logins[$Username]) && $logins[$Username] == $Password):
          $_SESSION['UserData']['Username']=$logins[$Username];
          header("location:admintable.php");
          exit;
        else:
          echo "<span  style='color:red'>Invalid Login Details</span>";
        endif;
     endif;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>admin</title>
  </head>
  <body>
    <form action="" method="post" name="Admin_Form">
        
      <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
        <?php if(isset($msg)){?>
        <tr>
          <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
        </tr>
        <?php } ?>
        <tr>
          <td colspan="2" align="left" valign="top"><h3>Admin Login</h3></td>
        </tr>
        <tr>
          <td align="right" valign="top">Username</td>
          <td><input name="Username" type="text" class="Input"></td>
        </tr>
        <tr>
          <td align="right">Password</td>
          <td><input name="Password" type="password" class="Input"></td>
        </tr>
        <tr>
          <td> </td>
          <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
        </tr>
      </table>
      <?php
        $result = new admin();
        echo $result->log();
        ?>
    </form>
  </body>
</html>