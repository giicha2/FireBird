<?php 
require "data.php";
?>
<html>
    <head>
        <h3>delete page</h3><br>
    </head>
    <body>
        <form action="delete.php" method="POST">
            <input type=text name="deleteID" >
            <input type="submit" value="delete ok">
        </form>
         <?php
    $query="SELECT *FROM firebird";
    $result=mysqli_query($conn,$query);
    
    while($row=mysqli_fetch_assoc($result)){
        echo $row['id']."<br>";
        echo $row['userID']."<br>";
        echo $row['userScore']."<br><br>"; 
    }
   
    ?>
    </body>
   
</html>