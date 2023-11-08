<?php
include ("admin_dbcon.php");


?>

<div class="dashboard">
    <h1>Dashboard<small> statistics Overview</small></h1> 
   <div class="p-2"style="background:gf5f5f5;"><a href="admin_index.php?page=user_list">User_list</a> 



</div>
<div class="user_list"> 
<table> 
    <thead> 
        <th>Id</th>
        <th>Uaser Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>status</th>
        <th>Action</th>
    </thead>
    <tbody>
<?php
$user_data_select= mysqli_query($admin_dbcon,"SELECT * FROM `data`");
while($rows=mysqli_fetch_assoc($user_data_select)){
	?>




    <td><?=$rows['id']?></td>
    <td><?=$rows['username']?></td>
    <td><?=$rows['email']?></td>
    <td><?=$rows['mobile']?></td>
    <td><?=$rows['status']?></td>
    <td><a href="">Edit</a></td>
    

    <?php
    
    
}
    ?>

</div>
</tbody>
</table>

</div>