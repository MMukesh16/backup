<?php 
require_once 'function.php';
 $id=$_GET['id'];
 $sql = $obj->delete($id);
 if($sql){
    header('location:index.php');
 }
 else{
    echo "failed";
 }
?>