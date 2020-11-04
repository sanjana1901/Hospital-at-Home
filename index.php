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
   .result{
	margin-left:250px;
}
    h1{align:center;}
    .cellContainer{
	margin-left:-15px;
	margin-right:35px;
	margin-bottom:30px;
	background-color:red;  
	width:425px;
	float: left;
	height: 300px; 
	text-align : center; 
	align-items : center;
	padding: 15px; 
	justify-content:center;
}
  </style>
 </head>
 <body>
<div class="content">
  <div class="container">
   <br />
   <h2 align="center">Search for ailment and note the id.</h2><br />
   <div class="form-group">
    <div class="input-group">
     <input type="text" class="search" name="search_text" id="search_text" 

placeholder="Search by Ailment or Symptoms" class="form-control"  style="margin-left: 250px;" />
     <span>Search</span>
    </div>
   </div>
   <br />
   <div id="result"></div>
  </div>
  <div class="result">
	<br><br>
	<form action="display.php" method="GET">
		<lable>Enter the ID(Axxx):</lable>
		<input type="text" name="id" value="">
		<input type="submit" name="submit" value="Submit">
	</form><br><br>
<div class="notes">
<div class="cellContainer" style="background-color:#fab7b1;">
	 <p><b>COVID-19<br><br>
	COVID-19 affects different people in different ways. Most infected people will develop mild to moderate illness and recover without hospitalization.<br><br> Some of the symptoms are:<br>
		Fever<br>
		Dry Cough<br>
		Tiredness<br><br>
		<b><p>Some preventive measures:</p></b><br>
		<p><b>Maintain personal hygeine<br>
		Practise social distancing<br>
		Don’t touch your eyes, nose or mouth.<br></b></p>
</b></p>
</div>
<div class="cellContainer" style="background-color:#c1ffb5;">
		<p><b>Common cold<br><br>
		Often ignored as part and parcel of the season change, the common cold is a viral infection. It affects both children and adults alike and more likely to subside in 2 to 4 days.<br><br> Some of the symptoms are:<br><br>
		Headache<br>
		Runny Nose<br>
		Low-grade fever<br><br>
		<b><p>Some preventive measures:</p></b><br>
		<p><b>Take plenty of rest<br>
		Drink plenty of water and other fluids<br>
		Consume home-cooked food<br></b></p>
</b></p>
</div>
	 <div class="cellContainer" style="background-color:#c3c4f7;">
	 <p><b>Strep throat<br><br>
	Strep throat is a more critical version of a sore throat that's caused by a bacterial infection. It is quite common among school-going kids. The best treatment for this winter illness is antibiotics prescribed by a medical professional.<br><br> Some of the symptoms are:<br>
		Sore throat<br>
		Difficulty in swallowing<br>
		Swollen lymph nodes<br><br>
		<b><p>Some preventive measures:</p></b><br>
		<p><b>Wash your hands before eating<br>
		Drink warm to hot fluids<br>
		Gargle, the moment you feel soreness in your throat<br></b></p>
</b></p>
</div>
	<div class="cellContainer" style="background-color:#ecc1f5;">
	<p><b>Norovirus<br><br>
 Norovirus is also called the winter vomiting bug that infects the stomach. Norovirus is a very infectious virus that can affect people of all ages and strike throughout the year. However, norovirus infection is very common in the winter season.<br><br> Some of the symptoms are:<br><br>
 Nausea<br>
 Vomiting<br>
 Stomach pain<br><br>
 <b><p>Some preventive measures:</p></b><br>
 <p><b>You should practice proper hand and oral hygiene.<br>
 Keep your home neat and clean.<br>
 You should not cook if you are not well.<br></b></p>
</b></p>
</div>
</div>
</div>
</div>

<nav class="nav-main">
	<div class="btn-toggle-nav" onclick="toggleNav()"></div>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="aboutus.html">About</a></li>
		<li><a href="doctorform.php">Consultation</a></li>	
		<li style="padding-left: 900px"><a href="#">Login</a></li>
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

</body>
<script src="mainMenu.js"></script>
<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
</html>