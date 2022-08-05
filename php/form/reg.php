<?php
        $nameErr = $pwdErr = "";
        $name = $pwd = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
              $nameErr = "Name is required";
            } else {
              $name = ($_POST["name"]);
              if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed";
              }
            }
            if (empty($_POST["pwd"])) {
                $pwdErr = "password is required";
            }else{
                $pwd = ($_POST["pwd"]);
                header("location:welcome.php");
            }
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>
    
    <h2 align="center">Registration</h2>
    <p align="center"><span class="error">* required field</span></p>
    <form align="center" method="post" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF"]);?>">
        Name: <input type="text" name="name" value="<?php echo $name;?>">
        <span class="error">*
            <?php echo $nameErr;?>
        </span>
        <br><br>
        <label for="pwd">Password:</label>
        <input type="password" name="pwd">
        <span class="error">*
            <?php echo $pwdErr;?>
        </span><br><br>
        <input type="submit" name="submit" value="Submit">

    </form>
   <?php 
     include 'database.php';
     $name = ($_POST["name"]);
     $pwd = ($_POST["pwd"]);

   ?>
   <tr>
    <td><</td>
   </tr>
</body>
</html>