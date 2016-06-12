<?php 
require "data.php";
?>
<html>
	<head>
		<meta name="viewport" content="width=device-width" />
		<link rel="stylesheet" href="style.css" type="text/css">
		<title>main menu</title>
	</head>
<body>
	<nav id="headUI">
		<h1>User Data :환영합니다 마스터.^0^;;;;;**</h1>
		<img src="img/img01.jpg" width=100px height=100px>
	</nav>
	<nav id="leftUI">
		<?php
		$query=mysqli_query($conn,"SELECT *FROM firebird");
			print "<h2>User list*</h2><br>";			
			while ($row=mysqli_fetch_assoc($query)) {
				echo '<li><a href="http://localhost/FireBird/connect.php?id='.$row['id'].'">'.$row['id']." ".$row['userID'].'</a></li>'."\n";
			}
			//mysql_close($con);
		?>
	</nav>

	<div>
		description^0^;;<br><br>

		<?php
		//$sql="SELECT * FROM peaple LEFT JOIN ages ON peaple.id=ages.id WHERE id=".$_GET['id'];
		$sql="SELECT *FROM firebird WHERE id=".$_GET['id'];
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($result);
		echo '<p1>'.$row['userID'].'</p1><br>';
		echo '<p2>'.$row['userScore'].'</p2><br>';
		echo '<p2>'.$row['createTime'].'</p2><br>';
		?>
		
		<?php
		//$sql="SELECT *FROM peaple LEFT JOIN ages ON peaple.id=ages.id"


		?>
	</div>
	<div id="input">
		<a href="http://localhost/FireBird/insertPage.php">Insert data</a><br>
		<a href="http://localhost/FireBird/deletePage.php">Delete data</a><br>
		<a href="http://localhost/FireBird/ranking.php">Ranking</a><br>
		<input type="button" id="btn_insert" value="Insert"/> 
		<input type="button" id="btn_delete" value="Delete"/>
		<input type="button" id="btn_ranking" value="Ranking"/>
		<script type="text/javascript" src="script2.js"></script>
	</div>
	<div id="delete">
		
		
	</div>
	
		
</body>
</html>