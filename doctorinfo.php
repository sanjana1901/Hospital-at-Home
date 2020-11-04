<!DOCTYPE html>
<html>
<head>
	<title>Toggle Menu</title>
	<link rel="stylesheet" href="resetstylesheet.css">
	<link rel="stylesheet" href="style.css">
	<style type="text/css">
		.content{
			width: 600px;
			margin-left: 450px;
			margin-top: -150px;
			text-align: justify;
      align-items: center;
		}
    table, th, td {
  border: 1px solid black;
  font-size: 18px;
}
th{
  padding: 10px;
  text-align: left;
  width: 200px;
  border-color: black;
}
td{
  padding: 10px;
  text-align: left;
  width: 300px;
  border-color: black;
  }
	</style>
</head>
<body>
<div class="content">
  <h1 align="center" style="font-size: 32px; margin-top: -50px">Doctor Contact List</h1><br>
  <?php
    $conn = mysqli_connect("localhost:3307", "root", "", "HAH");
    $output = '';
    error_reporting();
    $query1="SELECT * FROM `doctorinfo`;";
    $data=mysqli_query($conn,$query1);
    while($result=mysqli_fetch_assoc($data)){
    echo "<table border=1px cellspacing=10 cellpadding=10><tr><th>Name: </th><td>".$result['Name']."</td></tr><tr><th>Degree: </th><td>".$result['Degree']."</td></tr><tr><th>Specialization: </th><td>".$result['Specialization']."</td></tr><tr><th>Hospital: </th><td>".$result['Hospital']."</td></tr><tr><th>Phone: </th><td>".$result['Phone']."</td></tr><tr><th>Email: </th><td>".$result['Email']."</td></tr></table><br><br>";
    }
    ?>
</div>


<div class="topnav">
	<nav class="nav-main">
  <div class="btn-toggle-nav" onclick="toggleNav()"></div>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="aboutus.html">About</a></li>
    <li><a href="doctorform.php">Consultation</a></li>  
    <li style="padding-left: 900px"><a href="login.php">Login</a></li>
  </ul>
</nav>

<aside class="nav-sidebar">
  <ul>
    <li><span>Treatment Options</span></li>
    <li><a href="homeopathic.php">Homeopathic</a></li>
    <li><a href="allopathic.php">Allopathic</a></li>
    <li><a href="ayurvedic.php">Ayurvedic</a></li>
    <li><a href="homerem.php">Home remedies</a></li>
    <li><a href="doctorinfo.php">Doctor Contact List</a></li>

  </ul>
</aside>
</div>


</body>
<script src="mainMenu.js"></script>
</html>
