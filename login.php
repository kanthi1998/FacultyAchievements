<html>
<head>
<title>faculty achievements</title>
<style>

.navbar {
  overflow: hidden;
  background-color:darkblue;
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
  <a href="view.php">View Acheievements</a>
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
	
		<form method="POST"><center>
			<br><h1> Log in</h1><br>
			Username  <input type="text" name="username" required/><br><br>
			Password  <input type="password" name="password" required/><br><br>
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
				$q="SELECT * FROM logch WHERE id='".$id."'" ; 	
				$r=mysqli_query($link,$q);
    				$rowcount=mysqli_num_rows($r);
				if($rowcount==0)
					echo "<h1><center>Registration Required</center></h1>";
				while($row=mysqli_fetch_row($r))
					{
						if(!strcmp($pass,$row[1]))
						{
					 		 echo"<form method= \"POST\">
							<center>
							<h2>To Add Your Achievement :<a href=\"details.php\">ClickHere</a><br>
							To Modify Your Achievement :<a href=\"update.php\">ClickHere</a></h2>							
							</form></center>";
						}		
						else{
							echo "<h4><center>Enter Valid Deatils</center></h4>";
							exit;
						}
					}
			}
		}
		
	}
?>