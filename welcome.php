<?php 
session_start();
require_once "config.php";
$session=new db_connect();
$sec=$session->session();
if(!$sec){
    header("location:login.php");  
}
?>
<!doctype>
<html>
<body>

<table>
<thead>
<tr>
<td>Name</td>
<td>Email</td>
<td>Date</td>
<td>Day</td>
<td>Month</td>
<td></td>
</tr>
<t/thead>
<tbody>
<tr>
<?php
 require_once "config.php";
$fetch=new db_connect();
$res=$fetch->fetchout();
while($row=mysqli_fetch_array($res)){
    $name=$row['name'];
    $email=$row['email'];
    $dob=$row['dob'];
    $day=$row['day'];
    $month=$row['month'];
?>
<td><?php echo $name;?></td>
<td><?php echo $email ;?></td>
<td><?php echo $dob;?></td>
<td><?php echo $day;?></td>
<td><?php echo $month ;?></td>
<td><a href="">Edit </a>
<a href="">Delect</a></td>

</tr>
<?php }?>
</tbody>
</table>
</body>
</html>