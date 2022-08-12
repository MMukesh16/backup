<?php
    $typeErr = $emailErr = $messageErr =  $mobileErr = "";  
    $type = $email = $messege =  $mobile = ""; 

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        if (empty($_POST["type"])) 
        {
            $typeErr = "Required";
        } else {
            $type = ($_POST["type"]);
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

        if (empty($_POST["message"])) 
        {
            $message = "";
        } else {
            $message = ($_POST["message"]);
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

<?php
  require_once 'functions.php';
  $recorddata=new Database();
    if(isset($_POST['submit']))
    {
      $type=$_POST['type'];
      $email=$_POST['email'];
      $message=$_POST['message'];
      $mobile=$_POST['mobile'];

      if ((empty($_POST["type"]))&&(empty($_POST["email"]))&&(empty($_POST["message"]))&&(empty($_POST["mobile"])))
      {
        echo "failed to insert record";
      }
      else
      {
        $sqli=$recorddata->complaint($type, $email, $message, $mobile);
        echo "<script>alert('Record inserted successfully');</script>";
      } 
    }
?>


<form name = "createrecord" method = "post" >
    <div class="row">
        <h1>Complaint Report</h1>

        <div class="col-md-4">
            <b>Type</b>
            <input type="radio" id="html" name="type" value="order">Order
            <input type="radio" id="css" name="type" value="product">Product
            <input type="radio" id="javascript" name="type" value="delivery">Delivery
            <span class="error">* <?php echo $typeErr;?></span>
        </div>

        <div class="col-md-4">
            <b>email</b>
            <input type="text" name="email"/>
            <span>* <?php echo $emailErr;?></span>
        </div>

        <div class="col-md-4">
            <b>Message:</b><br>
            <textarea name="message" rows="5" cols="40"></textarea>  
        </div>

        <div class="col-md-4">
            <b>Mobile</b>
            <input type="number" name="mobile"/>
            <span>* <?php echo $mobileErr; ?> </span>
        </div>

        <div class="col-md-8">
            <input type="submit" name="submit" value="Submit">   <a href="success.php"> Done</a>
        </div>

    </div>
</form>
