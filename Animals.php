<?php 
session_start();
?>

<html>
	<head>
		<title> Animals </title>
		<link rel="stylesheet" type="text/css" href="tools/css.css">
		<link rel="stylesheet" type="text/css" href="tools/backg.css">
		<script src="tools/view.js"> </script>
	</head>
<body>
	<table id="main">
		<tr>
			<td> </td>
			<td></td>
			<td> </td>
		</tr>
		<tr>
			<td> </td>
			<td class="extra"> 
				<div class="navbar">
					<a href="logout.inc.php">Logout!</a>
					<div class="dropdown">
					<button class="dropbtn">View 
					</button>
					<div class="others">
					<a href="#" onclick="animals()">ALL</a>
					<a href="#" onclick="terrestrial()">Terrestrial</a>
					<a href="#" onclick="aquatic()">Aquatic</a>
					<a href="#" onclick="insects()">Insects</a>
					<a href="#" onclick="birds()" >Birds</a>
							</div>
					</div> 
					<div class="result" id="searchbar">
				
					<?php
					$input=$_POST['search'];
						if($input=='')
						echo'	<script>
						document.getElementById("searchbar").style.display="none";
							</script>';
						else
						echo '<script>
						document.getElementById("searchbar").style.display="block";
					</script>	';					
					include ('dbcon.php');
					$count=0;
					$sqlget="Select * from animals where aname like '%$input%' ";
					$sqldata=mysqli_query($conn,$sqlget) or die('no data found');
					while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
					{	$link=$row['aname'].".html";
						echo "<a href=$link>";
						echo $row['aname'];
						echo '</a>';
						echo '<br>';
					$count+=1;
					}
					if($count==0)
						echo '<a> not found!</a>'
					?>

					</div>
					<form method="post">
					<input type="text" placeholder="Search" name="search"> <div class="sicon"> </div> </form>
				</div>
			</td>
			<td> </td>
		</tr>
		<tr>
			<td> 	</td>
			<td class="main tabborder">
			<div id="insects" class="container2">
				<a href="Ant.html"> 
				<div class="box ant ">
				<div class="bar dbc">
				<b> Ant </b>
				</div>
				</div> </a>
				<a href="bee.html"><div class="box bee">
				<div class="bar dbc">
				<b>Bee</b>
				</div>
				</div></a>
				<a href="butterfly.html">
				<div class="box butterfly">
				<div class="bar dbc">
				<b>Butterfly</b>
				</div>
				</div>	</a>
				<a href="tarantula.html">
				<div class="box tarantula">
				<div class="bar dbc">
				<b>Tarantula</b>
				</div>
				</div>		</a>
			
			
			</div>
			<div id="reptile" class="container2">
				<a href="lizard.html">
				<div class="box lizard">
				<div class="bar dbc">
				<b>Lizard</b>
				</div>
				</div></a>
				<a href="snake.html">
				<div class="box snake">
				<div class="bar dbc">
				<b>Snake</b>
				</div>
				</div></a>
			</div>
			<div id="birds" class="container2">
				<a href="crow.html">
				<div class="box Crow">
				<div class="bar dbc">
				<b>Crow</b>
				</div>
				</div></a>
				<a href="hawk.html">
				<div class="box hawk">
				<div class="bar dbc">
				<b>Hawk</b>
				</div>
				</div></a>
				<a href="owl.html">
				<div class="box owl">
				<div class="bar dbc">
				<b>Owl</b>
				</div>
				</div>	</a>
				<a href="parrot.html">
				<div class="box parrot">
				<div class="bar dbc">
				<b>Parrot</b>
				</div>
				</div>	</a>
			
			</div>
			<div id="aquatic" class="container2"> 
				<a href="dolphin.html">
				<div class="box dolphin">
				<div class="bar dbc">
				<b>Dolphin</b>
				</div>
				</div></a>
				<a href="shark.html">
				<div class="box shark">
				<div class="bar dbc">
				<b>Shark</b>
				</div>
				</div>	</a>
				<a href="whale.html"><div class="box whale">
				<div class="bar dbc">
				<b>Whale</b>
				</div>
				</div></a>
			
			
			</div>
			<div id="terrestrial" class="container2"> 
				<a href="Bear.html">
				<div class="box bear ">
				<div class="bar dbc">
				<b>Bear</b>
				</div>
				</div> </a>
				<a href="gorila.html">
				<div class="box gorila">
				<div class="bar dbc">
				<b>Gorila</b>
				</div>
				</div> </a>
				<a href="lion.html">
				<div class="box lion">
				<div class="bar dbc">
				<b>Lion</b>
				</div>
				</div>	</a>
				<a href="rabbit.html">
				<div class="box rabbit">
				<div class="bar dbc">
				<b>Rabbit</b>
				</div>
				</div></a>	
				<a href="tiger.html">
				<div class="box tiger">
				<div class="bar dbc">
				<b>Tiger</b>
				</div>
				</div>	</a>
				<a href="wolf.html">
				<div class="box wolf">
				<div class="bar dbc">
				<b>Wolf</b>
				</div>
				</div>	
				</a>
			
			
			</div>
			<div id="allanimals" class="container">
			
				<a href="Ant.html"> 
				<div class="box ant ">
					<div class="bar dbc">
						<b> Ant </b>
					</div>
				</div> </a>
				<a href="Bear.html">
				<div class="box bear ">
					<div class="bar dbc">
						<b>Bear</b>
					</div>
				</div> </a>
				<a href="bee.html"><div class="box bee">
					<div class="bar dbc">
						<b>Bee</b>
					</div>
				</div></a>
				<a href="butterfly.html">
				<div class="box butterfly">
					<div class="bar dbc">
						<b>Butterfly</b>
					</div>
				</div>	</a>
				<a href="crow.html">
				<div class="box Crow">
					<div class="bar dbc">
						<b>Crow</b>
					</div>
				</div></a>
				<a href="dolphin.html">
				<div class="box dolphin">
					<div class="bar dbc">
						<b>Dolphin</b>
					</div>
				</div></a>
				<a href="gorila.html">
				<div class="box gorila">
					<div class="bar dbc">
						<b>Gorila</b>
					</div>
				</div> </a>
				<a href="hawk.html">
				<div class="box hawk">
					<div class="bar dbc">
						<b>Hawk</b>
					</div>
				</div></a>
				<a href="lion.html">
				<div class="box lion">
					<div class="bar dbc">
						<b>Lion</b>
					</div>
				</div>	</a>
				<a href="lizard.html">
				<div class="box lizard">
					<div class="bar dbc">
						<b>Lizard</b>
					</div>
				</div></a>
				<a href="owl.html">
				<div class="box owl">
					<div class="bar dbc">
						<b>Owl</b>
					</div>
				</div>	</a>
				<a href="parrot.html">
				<div class="box parrot">
					<div class="bar dbc">
						<b>Parrot</b>
					</div>
				</div>	</a>	
				<a href="rabbit.html">
				<div class="box rabbit">
					<div class="bar dbc">
						<b>Rabbit</b>
					</div>
				</div></a>			
				<a href="shark.html">
				<div class="box shark">
					<div class="bar dbc">
						<b>Shark</b>
					</div>
				</div>	</a>
					<a href="snake.html">
				<div class="box snake">
					<div class="bar dbc">
						<b>Snake</b>
					</div>
				</div></a>
				<a href="tarantula.html">
				<div class="box tarantula">
					<div class="bar dbc">
						<b>Tarantula</b>
					</div>
				</div>		</a>		
				<a href="tiger.html">
				<div class="box tiger">
					<div class="bar dbc">
						<b>Tiger</b>
					</div>
				</div>	</a>			
				<a href="whale.html"><div class="box whale">
					<div class="bar dbc">
						<b>Whale</b>
					</div>
				</div></a>
				<a href="wolf.html">
				<div class="box wolf">
					<div class="bar dbc">
						<b>Wolf</b>
					</div>
				</div>	
				</a>
			</div>

			</td>
			<td>	</td>
		</tr>
		
	</table>
</body>
</html>' 