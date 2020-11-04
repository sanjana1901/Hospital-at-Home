<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Toggle Menu</title>
	<link rel="stylesheet" href="resetstylesheet.css">
	<link rel="stylesheet" href="style.css">
  <script 

src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <style type="text/css">
    .search{
      width: 800px;
      height: 50px;
      font-size:20px;
    }
    span{
      background-color: lightgrey;
      font-size: 20px;
      border: 1px solid black;
      padding: 13px;
    }
    .container{
	margin-top:-225px;
	}
    td,th{
	padding: 20px;
	}
   .content{
	margin-top:-200px;
	margin-left:250px;
	width: 1000px;
}
    h1{align:center;
	font-size:32px;}
    h3{align:left;font-size:20px;}
    p{align:justify;font-size:18px;}
    button{
	width:950px;
	padding:10px;
	font-size:20px;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#allo").click(function(){
    $("#div1").fadeIn();
  });
});
$(document).ready(function(){
  $("#homeo").click(function(){
    $("#div2").fadeIn();
  });
});
$(document).ready(function(){
  $("#home").click(function(){
    $("#div4").fadeIn();
  });
});
$(document).ready(function(){
  $("#ayur").click(function(){
    $("#div3").fadeIn();
  });
});

$(document).ready(function(){
  $("#allo").dblclick(function(){
    $("#div1").hide();
  });
});
$(document).ready(function(){
  $("#homeo").dblclick(function(){
    $("#div2").hide();
  });
});
$(document).ready(function(){
  $("#home").dblclick(function(){
    $("#div4").hide();
  });
});
$(document).ready(function(){
  $("#ayur").dblclick(function(){
    $("#div3").hide();
  });
});
</script>
</head>
<body>
<div class="content">
<?php 
$conn = mysqli_connect("localhost:3307", "root", "", "HAH");
$output = '';
error_reporting(0);
if($_GET['submit']){
	$aid=$_GET['id'];
	$query1="SELECT * FROM `ailments` WHERE `AilmentID`='$aid';";
	$data=mysqli_query($conn,$query1);
	$result=mysqli_fetch_assoc($data);
	echo "<h1>".$result['Ailment']."</h1><br><br><h3>".$result

['Description']."</h3><br><br><h3> Causes:</h3><br><p>".$result

['Causes']."</p><br><br><h3>Symptoms: </h3><br><p>".$result['Symptoms']."</p><br><br><h3> 

Possible Ailments in case of severe condition.</h3><br><p>".$result

['Extentions']."</p>";
}
?>
<br>
<br>
<h3> Treatments: </h3><br>
<div align="center">
<button id="allo">Allopathic</button><br>
<div id="div1" style="display:none;">
<table align="center" cellpadding="10" cellspacing="5" align="center">
      <tr><th>Medicine</th>
      <th>Dosage</th>
      <th>Remarks</th>
      </tr>
      <?php
	$query1="SELECT * FROM `allopathic` WHERE `AilmentID`='$aid';";
	$data1=mysqli_query($conn,$query1);
      while($result1=mysqli_fetch_assoc($data1)){
      echo "<tr><td>".$result1['Medicine']."</td><td>".$result1['Dosage']."</td><td>".$result1['Remarks']."</td></tr>";
    }
    ?>
    </table><br>
</div>
<button id="homeo">Homeopathic</button><br>
<div id="div2" style="display:none;">
<table align="center" cellpadding="10" cellspacing="5" align="center">
      <tr><th>Medicine</th>
      <th>Dosage</th>
      <th>Remarks</th>
      </tr>
      <?php
	$query1="SELECT * FROM `homeopathic` WHERE `AilmentID`='$aid';";
	$data1=mysqli_query($conn,$query1);
      while($result1=mysqli_fetch_assoc($data1)){
      echo "<tr><td>".$result1['Medicine']."</td><td>".$result1['Dosage']."</td><td>".$result1['Remarks']."</td></tr>";
    }
    ?>
    </table><br>
</div>
<button id="ayur">Ayurvedic</button><br>
<div id="div3" style="display:none;">
     <br><p><b>Medicine</b></p><br>
      <?php
	$query1="SELECT * FROM `ayurvedic` WHERE `AilmentID`='$aid';";
	$data1=mysqli_query($conn,$query1);
      while($result1=mysqli_fetch_assoc($data1)){
      echo $result1['Medicine']." ,  ";
    }
    ?><br><br>
</div>
<button id="home">Home Remedies</button><br>
<div id="div4" style="display:none;">
<table align="center" cellpadding="10" cellspacing="5" align="center">
      <tr><th>Medicine</th>
      <th>Dosage</th>
      <th>Remarks</th>
      </tr>
      <?php
	$query1="SELECT * FROM `home_remedies` WHERE `AilmentID`='$aid';";
	$data1=mysqli_query($conn,$query1);
      while($result1=mysqli_fetch_assoc($data1)){
      echo "<tr><td>".$result1['Medicine']."</td><td>".$result1['Dosage']."</td><td>".$result1['Remarks']."</td></tr>";
    }
    ?>
    </table><br>
</div>
</div>
<br><br>
<h3> Suggestions:</h3><br>
<form method="post">
    <textarea placeholder="Suggest a home remedy for the selected ailmet...."  name="a" rows="10px" cols="135px"></textarea><br><br>
    <input type="submit" value="Send" name="send" style="float: right; font-size: 18px; margin-right:35px"  />
</form><br><br><p> </p><br>

<?php
extract($_POST);
if(isset($send))
{
$msg="$a";
$query2="INSERT INTO `suggest` (`SrNo`, `AilmentID`, `Suggestion`) VALUES (NULL, '$aid', '$msg');";
$data2=mysqli_query($conn,$query2);
}
?>

</div>
<div>
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