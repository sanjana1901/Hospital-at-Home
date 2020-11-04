<?php
include('connection.php');
error_reporting(0);
?>
<html>
<head>
<style type="text/css">
body{
background-color: lightgrey;
}
th{
text-align: left;
}
a{
color: black;
}
.shade{
 background: rgb(0, 0, 0);
 background: rgba(0, 0, 0, 0.5);
 color: #f5f5f5;
 width: 800px;
 position: middle;
 padding-top: 5px;
 padding-right: 20px;
 padding-left:20px;
 padding-bottom: 20px;
 margin-left: 250px;
}
button{float:right;margin:5px;}
</style>
</head>
<body>
<br><br>
<div align="center">
</div>
<div class="shade">
<h2 align="center"> Doctor Contact Details</h2>
 <table border="1px white" align="center" cellpadding="10" cellspacing="5"
bgcolor="white"; align="center">
 <tr><th>SrNo</th>
 <th>Name</th>
 <th>Degree</th>
 <th>Specialization</th>
 <th>Hospital</th>
 <th>Email</th>
 <th>Phone_no</th>
 <th>Username</th>
 <th>Password</th>
</tr>
 <?php
$query1="SELECT * FROM `doctorinfo`;";
$data=mysqli_query($conn,$query1);
 while($result=mysqli_fetch_assoc($data)){
 echo
"<tr><td>".$result['SrNo']."</td><td>".$result['Name']."</td><td>".$result['Degree']."</td><td>".$result['Specialization']."</td><td>".$result['Hospital']."</td><td>".$resu
lt['Email']."</td><td>".$result['Phone_no']."</td><td>".$result['Username']."</td><td>"."</td><td>".$result['Password']."</td></tr>";
 }
 ?>
 </table><br>
 <button><a href="index.php">Back</a></button>
 <button><a href="delete.php">Cancel Train</a></button>
 <button><a href="addtrain.php">Add Trains</a></button><br>
</div>
</body>
</html>
