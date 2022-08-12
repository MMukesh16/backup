<?php
$nameErr = $passwordErr = "";
$name = $password = "";
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
        $passwordErr = "password is required";
    }else{
        $password = ($_POST["pwd"]);
        // header("location:welcome.php");
    }
  }
?>             
<form name="insertrecord" method="post">
  <div class="row">
    <div class="col-md-4">
      <b>Name</b>
      <input type="text" name="name" value="<?php echo $name;?>" class="form-control" />
      <span class="error">* <?php echo $nameErr;?></span><br><br>
    </div>
    <div class="col-md-4">
      <b>password</b>
      <input type="text" name="password" class="form-control" />
    </div>
    <div class="col-md-8">
      <input type="submit" name="insert" value="Submit">
    </div>
  </div>
</form>

<?php
  require_once 'function.php';
  $insertdata=new DB_con();
    if(isset($_POST['insert']))
    {
      $name=$_POST['name'];
      $password=$_POST['password'];

      $sql=$insertdata->insert($name,$password);
      if($sql)
      {
        echo "<script>alert('Record inserted successfully');</script>";
        echo "<script>window.location.href='index.php'</script>";
      }
      else
      { 
        echo "<script>alert('Something went wrong. Please try again');</script>";
        echo "<script>window.location.href='index.php'</script>";
      }
    }
?>
