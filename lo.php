<!DOCTYPE html>
<html>
<head>
<title>faculty achievements</title>
<style>

body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color:gray;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: black;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
footer { 
  display: block;
}

</style>
</head>
<body background="log1.jpg">
<div  style="max-width:2000px">
 <center> <img src="banner2.jpg" style="width:100%"></center>
<div>
<div class="navbar">
  <a href="home.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Faculty Details 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://chemical.anits.edu.in/facultybt.php">CHEMICAL</a>
      <a href="http://civil.anits.edu.in/facultycivil.php">CIVIL</a>
      <a href="http://cse.anits.edu.in/facultycse.php">CSE</a>
      <a href="http://ece.anits.edu.in/facultyece.php">ECE</a>
      <a href="http://eee.anits.edu.in/facultyeee.php">EEE</a>
      <a href="http://it.anits.edu.in/facultyit.php">IT</a>
      <a href="http://mechanical.anits.edu.in/facultymech.php">MECHANICAL</a>
    </div>
  </div> 
  <a href="va.php">View Acheievements</a>
  <a href="login.php">Add Acheievements</a>
      
  <div class="dropdown">
    <button class="dropbtn">Verification
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="lo.php">CSE</a>
      <a href="lo.php">EEE</a>
      <a href="lo.php">ECE</a>
      <a href="lo.php">IT</a>
      <a href="lo.php">CHEMICAL</a>
      <a href="update.php">MECH</a>
	</div>
	</div>
</div>
	
		<form method="POST" ><center><br><br><h1> HOD Login</h1><br>
			Username<input type="text" name="username" required/><br><br>
			Password<input type="password" name="password" required/><br><br>
			<input type="submit" value="login" name="login"/></center>
		</form>
	</body>
</html>

<?php
	if(isset($_POST['login']))	
	{
		if(!empty($_POST['username']) && !empty($_POST['password']))
		 {  
			$id=$_POST['username'];
			$pass=$_POST['password'];
			$db="facach";
			
			$link=new mysqli("127.0.0.1:3308","root","",$db);
			if($link)
			{
				$q="SELECT * FROM alog WHERE id='".$id."'" ; 	
				$r=mysqli_query($link,$q);
    				$rowcount=mysqli_num_rows($r);
				if($rowcount==0)
					echo "<h3><center>Registration Required</center></h3>";
				while($row=mysqli_fetch_row($r))
					{
						if(!strcmp($pass,$row[1]))
						{
							echo "<center><br><br><form method=\"POST\" action=\"v.php\" target=\"v.php\">                                                       				
							Department : <input type=\"text\" name=\"dept\" value=\"$row[0]\" readonly /><br><br>
							<input type=\"submit\" value=\"verify\" name=\"ver\" /> </form></center> ";
						}
						else{
							echo "<h3><center>Enter Valid Details</center></h3>";
							exit;
						}
					}
			}
		}
				
		
 	}
?>