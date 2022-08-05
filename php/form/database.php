<?php
$conn=mysqli_connect('localhost','mukesh','Passw0rd','login');
if(!$conn){
    die('Not Connected'.$conn->connection_error);
}
$sql = "INSERT INTO details (name, password)
VALUES ('$name', '$pwd')";

if ($conn->query($sql) === TRUE) {
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = 'SELECT name, password FROM details';
$result = mysqli_query($conn,$sql);
$details = mysqli_fetch_all($result, MYSQLI_ASSOC);
print_r($details);
?>