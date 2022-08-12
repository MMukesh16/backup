<?php
    include_once("functions.php");
    $nameErr = $usernameErr =  $emailErr = $passwordErr =  $mobileErr = "";  
    $name = $username =  $email = $password =  $mobile = "";  
    
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        if (empty($_POST["username"])) 
        {  
            $usernameErr = "Required!";  
        } 

        if (empty($_POST["email"]))
        {
            $emailErr = "Required!";
        } else {
            $email = ($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
              $emailErr = "Invalid email format!";
            }
        }

        if (empty($_POST["password"]))
        {
            $passwordErr = "Required!";
        } else {
            $password = ($_POST["password"]);
            if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password))
            {
                $passwordErr = "Must Contain 8-12 characters, atleast one number, atleast one letter,  one of the symbols !@#$%"; 
            }else{
                $var = $obj->log();
                
                if($var){
                    
                    header('location:profile.php?id='.$var);
                }else{
                    echo "not work";
                }     
            }
        }
    }
?>

<h2>LOGIN</h2>
<form name = "createrecord" method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="row">
        <div class="col-md-4">
            <b>email</b>
            <input type="text" name="email"/>
            <span>* <?php echo $emailErr;?></span>
        </div>

        <div class="col-md-4">
            <b>Password</b>
            <input type="password" name="password"/>
            <span>* <?php echo $passwordErr;?></span>
        </div>

        <div class="col-md-8">
            <input type="submit" name="submit" value="Submit">
        </div>
    </div>
</form>
