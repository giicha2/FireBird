<?php 
require "data.php";
?>
<html>
    <head>
        <h3>insert sucess!!</h3><br>
    </head>
    <body>
       <?php
    $query="INSERT INTO firebird VALUES('','$_POST[userID]','$_POST[userScore]',now())";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_assoc($result)){
        echo $row['userID']."<br>";
        echo $row['userScore']; 
    }
    ?>
    <meta http-equiv="refresh" content="2;url=http://localhost/FireBird/connect.php"/> 
    </body>
          
</html>