<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKIES</title>
</head>
<body>
    <?php
    $key = Name;
    $value = MukeshKumar;
    setcookie($key,$value,time()+3600,"/");
    if(!isset($_COOKIE[$key])){
        echo "Cookie is not set";
    }else{
       echo "Cookie value is ".$_COOKIE[$key];
    }
    ?>
</body>
</html>
<!-- echo "Cookie is ";
        echo $_COOKIE['Mukesh']; -->