<?php
class DB_con
{
    public $dbh;
function __construct()
{
    $con = mysqli_connect('localhost','mukesh','Passw0rd','oopscrud');
    $this->dbh=$con;

    if(!$con){
        die('Not Connected'.$con->connection_error);
    }
}

    public function insert($name,$password)
	{
	$ret=mysqli_query($this->dbh,"insert into tblusers(name,password) values('$name','$password')");
	return $ret;
	}

    public function fetchdata()
	{
	$result=mysqli_query($this->dbh,"select * from tblusers");
	return $result;
	}

	public function fetchonerecord($id)
	{
	$oneresult=mysqli_query($this->dbh,"select * from tblusers where id=$id");

	return $oneresult;
	}

    public function update($name,$password,$id)
	{
	$updaterecord=mysqli_query($this->dbh,"UPDATE  tblusers SET name='$name',password='$password' where id='$id' ");
	return $updaterecord;
	}

    public function delete($id)
	{
		$sql = "DELETE FROM tblusers WHERE id=$id";
		$res=mysqli_query($this->dbh,$sql) ;
		 if($res){
			return true;
		} else {
			return false;
		}
	}
}

$obj=new DB_con();
?>