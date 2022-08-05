<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    /* .login{
        border: 2px solid;
    }
    th{
        border: 2px solid;
    } */
</style>
<body>
<h2>welcome</h2>
    <h2>Table</h2>
    <a href="reg.php" class="register-list">Create Register</a>
    <table class=login>
      <th>Name</th>
      <th>Password</th>
      <?php
      include 'database.php';
       $var="SELECT * FROM details";
       $result=$sql->query($var);
       if($result->num_rows>0){
         while($row=$result->fetch_assoc()){ 
            ?>
           <tbody>
            <tr>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['password'];?></td>
            </tr>
           </tbody>
         <?php 
         }
        }
      ?>
    </table>
</body>
</html>

<a href="reg.php">logOut</a>