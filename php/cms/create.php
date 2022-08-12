
<?php
    $nameErr = $usernameErr =  $emailErr = $passwordErr =  $mobileErr = "";  
    $name = $username =  $email = $password =  $mobile = "";  
    
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        if (empty($_POST["name"])) 
        {  
            $nameErr = "Required!";  
        } 
        else 
        {  
            $name = ($_POST["name"]);   
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
            {  
                $nameErr = "Only alphabets and white space are allowed";  
            }  
        }  

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
            }
        }
        if (empty($_POST["mobile"]))
        {  
            $mobileErr = "Required!";  
        } else {  
            $mobile =($_POST["mobile"]);    
            if (!preg_match ("/^[0-9]*$/", $mobileno) ) {  
            $mobileErr = "Only numeric value is allowed.";  
            }    
            if (strlen ($mobile) != 10) {  
            $mobileErr = "Mobile number must contain 10 digits.";  
            }  
        }  
    }     
?>
<h2>REGISTRATION</h2>
<?php
  require_once 'functions.php';
  $insertdata=new Database();
    if(isset($_POST['submit']))
    {
      $name=$_POST['name'];
      $username=$_POST['username'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      $mobile=$_POST['mobile'];

      if ((empty($_POST["name"]))&&(empty($_POST["username"]))&&(empty($_POST["email"]))&&(empty($_POST["password"]))&&(empty($_POST["mobile"]))){

        echo "failed to insert data";
        }
      
      else{
        $sql=$insertdata->insert($name, $username, $email, $password, $mobile);
        echo "<script>alert('Record inserted successfully');</script>";
       } 
    }
?>
<form name = "createrecord" method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="row">

        <div class="col-md-4">
            <b>Name</b>
            <input type="text" name="name"/>
            <span>* <?php echo $nameErr; ?> </span>  
        </div>

        <div class="col-md-4">
            <b>UserName</b>
            <input type="text" name="username"/>
            <span>* <?php echo $usernameErr; ?> </span>
        </div>

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

        <div class="col-md-4">
            <b>Mobile</b>
            <input type="number" name="mobile"/>
            <span>* <?php echo $mobileErr; ?> </span>
        </div>

        <div class="col-md-8">
            <input type="submit" name="submit" value="Submit">  <a href="welcome.php">Back to mainmenu</a> 
        </div>

        <!-- <div class="col-md-8">
                
        </div>
         -->
    </div>
</form>

