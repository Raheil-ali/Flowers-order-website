<!DOCTYPE html>

<html>
	<head>
		<meta charset ="ut-8">
		<title>Database</title>
		
		<link rel = "stylesheet" type = "text/css"
			href = "CSS/st.css" >	
		<style>
			button {
				background-color : #FFFF;
				border-radius: 12px;
				width: 220px;
					}
		</style>
		
	</head>

	<body>
	
		
		
		<div class="header">
		<h1><em>Blooms.<em></h1>
		<h3><em>Give emotions to your loved ones.</em></h3>
		</div>

		<div class="navbar">
		<a href = "https://twitter.com">
			<img src = "images/wt.jpeg" width = "35" height = "30"
				alt = "twitter">
			</a>
		<a href = "https://www.instagram.com">
			<img src = "images/wi.jpeg" width = "35" height = "30"
				alt = "instagram">
			</a>
		<a href = "https://www.snapchat.com/">
			<img src = "images/ws.jpeg" width = "35" height = "30"
				alt = "snapchat">
			</a>
		<a href = "mailto:blooms@gmail.com">
			<img src = "images/wm.jpeg" width = "35" height = "30"
				alt = "mail me">
			</a>
			<div class="dropdown">
			<button class="dropbtn"><img src = "images/mu.jpg" width = "35" height = "30"
				alt = "mail me"> 
			<i class="fa fa-caret-down"></i>
			</button>
				<div class="dropdown-content">
				<a href="index.html">Home</a>
				<a href="join us.html">Join us</a>
				<a href="flowers.html">Flowers information</a>
				<a href="order.html">Order</a>
				<a href="help.html">Help</a>
				</div>
			</div> 
				<p align="Right">
				<label style = "color: white;">Search:
				<input type = "search" placeholder = "search query" />
				</p>
			</div><br><br>
			
			
			<center>
		<?php
			$uname= $_POST["uname"];
			$fname = $_POST["fname"];
			$lname = $_POST["lname"];
			$password = $_POST["password"];
			$phone = $_POST["phone"];
			$year = $_POST["year"];
			$university = $_POST["university"];
			$experience =$_POST["experience"];
			
			$servername = "localhost";
			$username = "root";
			$password = "";
			$db = "eblooms";
			
			$conn= new mysqli($servername, $username, $password, $db);
			
			if ($conn->connect_error) {
				die ("Error: Connection to DB server fails </body></html>");
			}
			
			$sql="INSERT INTO personalinformation (uname, FirstName, LastName, Password, PhoneNumber)
			VALUES ('$uname', '$fname', '$lname', '$password', '$phone')";
			
			if ($conn->query($sql)) {
				echo "<p>New personal Information record created successfully</p>";
			} else {
					echo "Error:" . $sql . "<br>" . $conn->error;
			}
			
			$sql="INSERT INTO employmentinformation (year, university, WorkExperience)
			VALUES ('$year', '$university', '$experience')";
			
			if ($conn->query($sql)) {
				echo "<p>New Employment Information record created successfully</p>";
			} else {
					echo "Error:" . $sql . "<br>" . $conn->error;
			}
				
			
			$conn->close();
			
			print("<h2>Hello $fname $lname </h2>");
			print("<h2>We are happy to have you with us.</h2>")
			
		?>
		
		<div class="footer">
				<h2>Blooms.</h2>
				<a href = "help.html">Help</a>
			</div>
	
		
	</body>
</html>