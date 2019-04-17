<html>
<!DOCTYPE html>
<html>
<head>
<title>faculty achievements</title>
<style>

caption {
color:darkblue:
}
.container2 {
 position: absolute;
 left:260;
  margin: 20px;
  max-width: 800px;
  background:white;
  opacity: 0.9;
  filter: alpha(opacity=90);

  border-radius: 12px;
}
.container {
  position: absolute;
   top:320;
  left : 260;
  margin: 20px;
  max-width: 500px;
  padding: 16px;
  background:white;
  opacity: 0.9;
  filter: alpha(opacity=90);
 margin-left:15%; 
   margin-right:15%;
  border-radius: 12px;
}
.first{
    border-radius: 12px;
}


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
  position: absloute;
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
<body background="f.jpg">
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
<form method="POST">
<br>
<marquee behavior="scroll" direction="left"><b>Our Dedicated Staff And Their Tremendous Achievements</b></marquee>
<center><table  class="container">
<th><tdalign="left"><h1> VIEW FACULTY ACHIEVEMENTS</h1></td><th> </center>
<tr><td ><pre><h4>SEARCH FACULTY  ACHIEVEMENTS DETAILS BY ENTERING ANY OF THE BELOW DETAILS.</h4></pre></td></tr>
<tr><td align="center"><h2>   Faculty Id :<input type="text" class="first" name="id"/></h2><br></td></tr>
<tr><td align="center"><h2>   	    Name : <input type="text" class="first" name="name"/></h2><br></td></tr>
<tr><td align="center"> <h2>Department: <input type="text" class="first" name="dept"/></h2><br></td></tr>
<tr><td align="center"><h2>           From :<input type="text"  class="first" name="fro"/></h2><br></td></tr>
 <tr><td align="center"><h2>Field                  : 
<input type="text" class="first" name="fi"/></h2><br></td></tr>
 <tr><td align="center"><h2>Achievement     :
<input type="text" class="first" name="ai"/></h2></td></tr>
<tr><td align="center"><small>Prize/certificate</small><br></td></tr>
<tr><td align="center"> <input type="submit" class="first" value="submit" name="submit"/></h2></td></tr>
</table></center>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</form>
</body>
</html>
<?php
//echo "hi";
if(isset($_POST['submit']))
{

	if(empty($_POST['name']) && empty($_POST['id'])&& empty($_POST['dept']) && empty($_POST['fro']) && empty($_POST['fi']) && empty($_POST['ai']) )
		 	{  
				echo"<center><h1> Enter The Req Fields</h1></center>";
  				exit;
			}
	$servername = "localhost:3308";
	$username = "root";
	$password = "";
	$dbname = "facach";
	$con = new mysqli($servername, $username, $password, $dbname);
	if ($con) 
		{	
			$id=$_POST['id'];
			echo "hi".$id;
			echo "db connected";
			echo "<br>";
			if(!empty($_POST['id']))
			{
				if(!empty($_POST['fro']) && !empty($_POST['fi']) && !empty($_POST['ai']))
				{
					$fro=$_POST['fro'];
					$fi=$_POST['fi'];	
					$facid = $_POST['id'];
					$ai=$_POST['ai'];
					$sql="select * from  fdp where id='".$facid."' and fro='".$fro."' and achi='".$ai."' and field= '".$fi."'" ;
				}
				else if(!empty($_POST['fro']) && !empty($_POST['fi']))
				{
					
					$facid = $_POST['id'];
					$fro=$_POST['fro'];
					$fi=$_POST['fi'];
				   	$sql="select * from  fdp where id='".$facid."' and fro='".$fro."' and field='".$fi."'";
				}
				else if(!empty($_POST['fro']) && !empty($_POST['ai']))
				{
					$facid = $_POST['id'];
					$fro=$_POST['fro'];
					$ai=$_POST['ai'];
				   	$sql="select * from  fdp where id='".$facid."' and fro='".$fro."' and achi='".$ai."'" ;
				}
				else if(!empty($_POST['fi']) && !empty($_POST['ai']))                                                                                                                                          
				{
					
					$facid = $_POST['id'];
					$fi=$_POST['fi'];
					$ai=$_POST['ai'];
				   	$sql="select * from  fdp where id='".$facid."' and field='".$fi."' and achi='".$ai."'" ;
				}
				
				else if(!empty($_POST['fro']))
				{
					$facid = $_POST['id'];
					$fro=$_POST['fro'];
					$sql="select * from  fdp where id='".$facid."' and fro='".$fro."'" ;
				}				
	                        else if(!empty($_POST['ai']))
				{
					$facid = $_POST['id'];
					$ai=$_POST['ai'];
					$sql="select * from  fdp where id='".$facid."' and achi='".$ai."'" ;
				}
				else if(!empty($_POST['fi']))
				{
					$facid = $_POST['id'];
					$fi=$_POST['fi'];
					$sql="select * from  fdp where id='".$facid."' and field='".$fi."'" ;
				}
				else
				{
                                	$facid = $_POST['id'];
					$sql="select * from  fdp where id='".$facid."'";
				}
			}
			elseif(!empty($_POST['name']))
			{
					if(!empty($_POST['dept']) && !empty($_POST['fro']) && !empty($_POST['fi']) && !empty($_POST['ai']))
					{	
						$name=$_POST['name'];
						$dept=$_POST['dept'];
						$fro=$_POST['fro'];
						$fi=$_POST['fi'];
  						$ai=$_POST['ai'];
						$sql="select * from  fdp where name='".$name."' and dept='".$dept."' and fro='".$fro."'and field='".$fi."' and achi='".$ai."'" ;
					}
					else if(!empty($_POST['dept']) && !empty($_POST['fro']) && !empty($_POST['fi']))
					{
						$name=$_POST['name'];
						$dept=$_POST['dept'];
						$fro=$_POST['fro'];
						$fi=$_POST['fi'];
						$sql="select * from  fdp where name='".$name."' and dept='".$dept."' and fro='".$fro."' and field='".$fi."'" ;
					}
					else if(!empty($_POST['dept']) && !empty($_POST['fro']) && !empty($_POST['ai']))
					{
						$name=$_POST['name'];
						$dept=$_POST['dept'];
						$fro=$_POST['fro'];
						$ai=$_POST['ai'];
						$sql="select * from  fdp where name='".$name."' and dept='".$dept."' and fro='".$fro."' and achi='".$ai."'" ;				
					}
					else if(!empty($_POST['dept']) && !empty($_POST['fi']) && !empty($_POST['ai']))
					{
						$name=$_POST['name'];
						$dept=$_POST['dept'];
						$fi=$_POST['fi'];
						$ai=$_POST['ai'];
						$sql="select * from  fdp where name='".$name."' and dept='".$dept."' and field='".$fi."' and achi='".$ai."'" ;				
					}
					else if(!empty($_POST['fi']) && !empty($_POST['fro']) && !empty($_POST['ai']))
					{
						$name=$_POST['name'];
						$fi=$_POST['fi'];
						$fro=$_POST['fro'];
						$ai=$_POST['ai'];
						$sql="select * from  fdp where name='".$name."' and field='".$fi."' and fro='".$fro."' and achi='".$ai."'" ;				
					}
					else if(!empty($_POST['fi']) && !empty($_POST['fro']))
					{
						$name=$_POST['name'];
						$fi=$_POST['fi'];
						$fro=$_POST['fro'];
						$sql="select * from  fdp where name='".$name."' and field='".$fi."' and fro='".$fro."'" ;				
					}
					else if(!empty($_POST['fi']) && !empty($_POST['ai']))
					{
						$name=$_POST['name'];
						$fi=$_POST['fi'];
						$ai=$_POST['ai'];
						$sql="select * from  fdp where name='".$name."' and field='".$fi."' and achi='".$ai."'" ;				
					}
					else if(!empty($_POST['ai']) && !empty($_POST['fro']))
					{
						$name=$_POST['name'];
						$fro=$_POST['fro'];
						$ai=$_POST['ai'];
						$sql="select * from  fdp where name='".$name."'and fro='".$fro."' and achi='".$ai."'" ;				
					}
					else if(!empty($_POST['dept']) && !empty($_POST['fro']))
					{
						$name=$_POST['name'];
						$dept=$_POST['dept'];
						$fro=$_POST['fro'];
						$sql="select * from  fdp where name='".$name."' and dept='".$dept."' and fro='".$fro."'" ;				
					}
					else if(!empty($_POST['fi']) && !empty($_POST['dept']))
					{
						$name=$_POST['name'];
						$fi=$_POST['fi'];
						$dept=$_POST['dept'];
						$sql="select * from  fdp where name='".$name."' and field='".$fi."' and dept='".$dept."'" ;				
					}
					else if(!empty($_POST['ai']) && !empty($_POST['dept']))
					{
						$name=$_POST['name'];
						$ai=$_POST['ai'];
						$dept=$_POST['dept'];
						$sql="select * from  fdp where name='".$name."' and achi='".$ai."' and dept='".$dept."'" ;				
					}
					else if(!empty($_POST['fro']))
					{
						$name = $_POST['name'];
						$fro=$_POST['fro'];
						$sql="select * from  fdp where name='".$name."' and fro='".$fro."'" ;
					}				
	                      	 	 	else if(!empty($_POST['ai']))
					{
						$name = $_POST['name'];
						$ai=$_POST['ai'];
						$sql="select * from  fdp where name='".$name."' and achi='".$ai."'" ;
					}
					else if(!empty($_POST['fi']))
					{
						$name = $_POST['name'];
						$fi=$_POST['fi'];
						$sql="select * from  fdp where name='".$name."' and field='".$fi."'" ;
					}
					else if(!empty($_POST['dept']))
					{
						$name = $_POST['name'];
						$dept=$_POST['dept'];
						$sql="select * from  fdp where name='".$name."' and dept='".$dept."'" ;
					}
					else
					{
                                					$name = $_POST['name'];
						echo $name;
						$sql="select * from  fdp where name='".$name."' ";
					}
			}
			elseif(!empty($_POST['dept']))
				{
					if(!empty($_POST['fi']) && !empty($_POST['fro']) && !empty($_POST['ai']))
					{
						$dept=$_POST['dept'];
						$fi=$_POST['fi'];
						$fro=$_POST['fro'];
						$ai=$_POST['ai'];
						$sql="select * from  fdp where dept='".$dept."' and field='".$fi."' and fro='".$fro."' and achi='".$ai."'" ;				
					}
					else if(!empty($_POST['fi']) && !empty($_POST['fro']))
					{
						$dept=$_POST['dept'];
						$fi=$_POST['fi'];
						$fro=$_POST['fro'];
						$sql="select * from  fdp where dept='".$dept."' and field='".$fi."' and fro='".$fro."'" ;				
					}
					else if(!empty($_POST['fi']) && !empty($_POST['ai']))
					{
						$dept=$_POST['dept'];
						$fi=$_POST['fi'];
						$ai=$_POST['ai'];
						$sql="select * from  fdp where dept='".$dept."' and field='".$fi."' and achi='".$ai."'" ;				
					}
					else if(!empty($_POST['ai']) && !empty($_POST['fro']))
					{
						$dept=$_POST['dept'];
						$fro=$_POST['fro'];
						$ai=$_POST['ai'];
						$sql="select * from  fdp where dept='".$dept."' and fro='".$fro."' and achi='".$ai."'" ;				
					}
					else if(!empty($_POST['fro']))
					{
						$dept=$_POST['dept'];
						$fro=$_POST['fro'];
						$sql="select * from  fdp where dept='".$dept."' and fro='".$fro."'" ;
					}				
	                      	 	 else if(!empty($_POST['ai']))
					{
						$dept=$_POST['dept'];
						$ai=$_POST['ai'];
						$sql="select * from  fdp where dept='".$dept."' and achi='".$ai."'" ;
					}
					else if(!empty($_POST['fi']))
					{
						$dept=$_POST['dept'];
						$fi=$_POST['fi'];
						$sql="select * from  fdp wheredept= '".$dept."'and field='".$fi."'" ;
					}
					else
					{
						$dept=$_POST['dept'];
						$sql="select * from  fdp where dept='".$dept."'" ;
					}
			}
			elseif(!empty($_POST['fro']))
				{
					if(!empty($_POST['fi']) && !empty($_POST['ai']))
					{
						$fro=$_POST['fro'];
						$fi=$_POST['fi'];
						$ai=$_POST['ai'];
						$sql="select * from  fdp where fro='".$fro."' and field='".$fi."' and achi='".$ai."'" ;				
					}
					 else if(!empty($_POST['ai']))
					{	
						$fro=$_POST['fro'];
						$ai=$_POST['ai'];
						$sql="select * from  fdp where fro='".$fro."'and achi='".$ai."'" ;
					}
					else if(!empty($_POST['fi']))
					{
						$fro=$_POST['fro'];
						$fi=$_POST['fi'];
						$sql="select * from  fdp where fro='".$fro."'and field='".$fi."'" ;
					}
					else
					{ 
						$fro=$_POST['fro'];
						$sql="select * from  fdp where fro='".$fro."'" ;
				        }
			}
			elseif(!empty($_POST['ai']))
				{
					if(!empty($_POST['fi']))
					{
						$fi=$_POST['fi'];
						$ai=$_POST['ai'];
						$sql="select * from  fdp where field='".$fi."' and achi='".$ai."'" ;				
					}
					else{
						$ai=$_POST['ai'];
	    					$sql="select * from  fdp where achi='".$ai."'" ;
		                            }		
				}
			else
				{
					if(!empty($_POST['fi']))
					{

						$fi=$_POST['fi'];
						$sql="select * from  fdp where field='".$fi."'" ;
					}
				}							
			$r=mysqli_query($con, $sql);
			$rowcount=mysqli_num_rows($r);
			if($rowcount==0)
			{
				echo"<center><h1>No Achievements Yet<h1></center>";
				exit;
			}
				echo "<table class='container2' border =' 3'> ";
				echo"<caption >Achievements</caption>";
				echo "<tr>"; 
				echo "<th>Faculty id</th>"; 
				echo "<th>Name</th>"; 
				echo "<th>Dept</th>";
				echo "<th>Field</th>"; 
				echo "<th>Achievement</th>";
				echo "<th>From</th>";
				echo "<th>To</th>";
				echo" <th>Decsription</th>";
				echo "</tr>";
				while($row=mysqli_fetch_row($r))
				 { 
						echo "<tr>
						<td>$row[0]</td>
						<td>$row[1]</td>
						<td>$row[2]</td>
						<td>$row[3]</td>		
						<td>$row[4]</td>
						<td>$row[5]</td>
						<td>$row[6]</td>
						<td>$row[7]</td>
						</tr> ";			
 				}
				echo "</table></center>";
			
		}


}

?>