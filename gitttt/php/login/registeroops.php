<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <h1 align="center"> Registration </h1>
    <form align="center" action="loginoops.php">
        <b> Enter Name: </b> <input type="text" name="name" value="<?php echo $Username;?>"><br>
        <b> Enter Password: </b> <input type="text" name="password" value="<?php echo $Password;?>"><br>
        <input type="submit" name="submit" value="Register ">
        <a href="loginoops.php">login</a>
    </form>

</body>

</html>