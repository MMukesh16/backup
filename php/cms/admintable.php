<?php
include_once("functions.php");
  $sqli=$obj->fetchdata();
  ?>
<style>
    .table{
        border: 2px solid;
    }
    th{
        border: 2px solid;
    }
    tr,td{
        border: 2px solid;
    }
</style>

<table id="mytable" class="table">
    <thead>
        <th>#</th>
        <th>Type</th>
        <th>User emailID</th>
        <th>Complaint</th>
        <th>Mobile</th>
        <th>Delete</th>
    </thead>

<?php
  while($row=mysqli_fetch_assoc($sqli))
  { 
?>
<tbody>   
  <tr>
    <td><?php echo htmlentities($cnt+1);?></td>
    <td><?php echo htmlentities($row['type']);?></td>
    <td><?php echo htmlentities($row['email']);?></td>
    <td><?php echo htmlentities($row['message']);?></td>
    <td><?php echo htmlentities($row['mobile']);?></td>
    <td><a href="del.php?id=<?php echo $row['id'];?>"><button><span></span>Delete</button></a></td>  
 </tr>
<?php
 $cnt++;
  }
?>
</tbody>
</table> <a href="admin.php">Back</a>