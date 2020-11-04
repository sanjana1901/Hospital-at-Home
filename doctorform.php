<html>
<head>
	<title>Toggle Menu</title>
	<link rel="stylesheet" href="resetstylesheet.css">
	<link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="doctorform.css">
</head>
<body>
  <div class="container">
  <form id="contact" action="" method="post">
    <h3>Doctor Contact Form</h3>
    <h4>Type in your query for consultation with doctor.</h4>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your message here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending" onclick="myFunction()">Submit</button>
    </fieldset>
  </form>
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
<script src="mainMenu.js"></script>
<script>
  function myFunction() {
  alert("Successfully Submitted!!");
}
</script>
</body>
</html>
