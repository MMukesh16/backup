<?php 
require_once 'functions.php';
 $id=$_GET['id'];
 $sqli = $obj->delete($id);
 if($sqli){
    header('location:admintable.php');
 }
 else{
    echo "failed";
 }
?>