<?php
include_once("function.php");
  $sql=$obj->fetchdata();
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
        <th>Name</th>
        <th>password</th>
        <th>Update</th>
        <th>Delete</th>
    </thead>

<?php
  while($row=mysqli_fetch_assoc($sql))
  { 
?>
<tbody>   
  <tr>
    <td><?php echo htmlentities($cnt+1);?></td>
    <td><?php echo htmlentities($row['name']);?></td>
    <td><?php echo htmlentities($row['password']);?></td>
    <td><a href="unpdate.php?id=<?php echo $row['id'];?>"><button><span ></span>Update</button></a></td>
    <td><a href="del.php?id=<?php echo $row['id'];?>"><button><span></span>Delete</button></a></td>
 </tr>
<?php
 $cnt++;
  }
?>
</tbody>
</table> 