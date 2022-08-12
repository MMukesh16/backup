<?php
    include_once("functions.php");
    $obj=new Database();
    $id=$_GET['id'];
    $sqli=$obj->update($id,$name,$username,$email,$password,$mobile);
?>
<?php
    $id=intval($_GET['id']);
    $obj=new Database();
    $sql=$obj->fetchonerecord($id);
    $cnt=1;
    while($row=mysqli_fetch_array($sql))
    {
?>
    <h1>Complaint Management System</h1>
    <h4>As part of the existing system, a complaint must be written on a page and submitted to the higher authority.<br> 
        The user in this role can submit complaints directly to the higher authority</h4>
    <h2>USER PROFILE</h2>    
    <form name="insertrecord"  method="post">
        <div class="row">
            <div class="col-md-4"><b>Name</b>
                <input type="text" name="name" value="<?php echo ($row['name']);?>">
            </div>
            <div class="col-md-4"><b>UserName</b>
                <input type="text" name="username" value="<?php echo ($row['username']);?>">
            </div>
            <div class="col-md-4"><b>email</b>
                <input type="text" name="email" value="<?php echo ($row['email']);?>">
            </div>
            <div class="col-md-4"><b>Mobile</b>
                <input type="text" name="mobile" value="<?php echo ($row['mobile']);?>">
            </div>
        </div>
    </form>  
    <a href="welcome.php">logOut</a>  <a href="complaint.php">Complaint</a>  
<?php
 } 
?>
