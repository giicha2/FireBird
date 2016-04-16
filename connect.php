<?php // require_once("data/db_info.php");
		//$s=mysql_connect($SERV,$USER,$PASS)or die("falas"); 
$conn=mysqli_connect("localhost","root",111111);
mysqli_select_db($conn,"test1");
$query=mysqli_query($conn,"SELECT id,name FROM peaple");
?>
<html>
	<head>
		<link rel="stylesheet" href="style.css" type="text/css">
		<title>main menu</title>
	</head>
<body>
	<h1>User Data :환영합니다 마스터.^0^;;;;;</h1>
	<nav>
		<?php

			print "<h2>User list</h2><br>";
			
			while ($row=mysqli_fetch_assoc($query)) {
				echo '<li><a href="http://localhost/StudyPHP/test/connect.php?id='.$row['id'].'">'.$row['name'].'</a></li>'."\n";

			}
			//mysql_close($con);
		?>
	</nav>

	<div>
		description^0^<br><br>

		<?php
		//$sql="SELECT * FROM peaple LEFT JOIN ages ON peaple.id=ages.id WHERE id=".$_GET['id'];
		$sql="SELECT *FROM peaple WHERE id=".$_POST['id'];
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($result);
		echo '<p1>'.$row['name'].'</p1><br>';
		echo '<p2>'.$row['desc'].'</p2><br>';
		echo '<p2>'.$row['birthday'].'</p2><br>';
		echo '<p2>'.$row['age'].'</p2>';
		?>
		
		<?php
		//$sql="SELECT *FROM peaple LEFT JOIN ages ON peaple.id=ages.id"


		?>
	</div>
</body>
</html>