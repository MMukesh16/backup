<?php
include_once("function.php");
$obj=new DB_con();
if(isset($_POST['update']))
{
$userid=intval($_GET['id']);

$name=$_POST['name'];
$password=$_POST['password'];
$sql=$obj->update($name,$password,$userid);
echo "Successfully Updated.";
header("location:index.php");
}
?>
<?php
$id=intval($_GET['id']);
$obj=new DB_con();
$sql=$obj->fetchonerecord($id);
$cnt=1;
while($row=mysqli_fetch_array($sql))
  {
  ?>
<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>Name</b>
<input type="text" name="name" value="<?php echo ($row['name']);?>">
</div>
<div class="col-md-4"><b>password</b>
<input type="text" name="password" value="<?php echo ($row['password']);?>">
</div>
</div>

<?php } ?>
<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="update" value="Update">
</div>
</div>
</form>