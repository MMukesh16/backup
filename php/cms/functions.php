<?php
class Database
{
    public $comp;
    function __construct()
    {
        $con = mysqli_connect('localhost','mukesh','Passw0rd','complaint');
        $this->comp=$con;
    
        if(!$con){
            die('Not Connected'.$con->connection_error);
        }
    }

    public function insert($name, $username, $email, $password, $mobile)
    {
        $iresult = mysqli_query($this->comp, "INSERT into usertable(name, username, email, password, mobile) values('$name', '$username', '$email', '$password', '$mobile')");
        return $iresult;
    }

    public function log()
	{
        $email = $_POST["email"];
        $password = $_POST["password"];
        $login = "SELECT * FROM `usertable` WHERE `email` ='$email' AND `password` = '$password'";
        $lo = mysqli_query($this->comp, $login );
        foreach ($lo as $l)
        {
            if($l['email']==$email){
              return $l[id];
            }
        }
	}

    public function fetchonerecord($id)
	{        
        $oneresult=mysqli_query($this->comp, "SELECT * FROM `usertable` WHERE id=$id");
        return $oneresult;
	}

    public function update($name,$username, $email, $password, $mobile, $id)
	{
        $updaterecord=mysqli_query($this->dbh,"UPDATE  `usertable` SET name='$name', username='$username', email='$email',password='$password', mobile='$mobile' where id='$id' ");
        return $updaterecord;
	}

    public function complaint($type, $email, $message, $mobile)
    {
        $cresult = mysqli_query($this->comp, "INSERT into `complainttable`(type, email, message, mobile) values('$type', '$email', '$message', '$mobile')");
        return $cresult;
    }

    public function fetchdata()
	{
        $result=mysqli_query($this->comp,"SELECT * FROM `complainttable`");
        return $result;
	}

    public function delete($id)
	{
		$sqli = "DELETE FROM `complainttable` WHERE id=$id";
		$res=mysqli_query($this->comp,$sqli) ;
		 if($res){
			return true;
		} else {
			return false;
		}
	}
}
$obj = new Database();
?>