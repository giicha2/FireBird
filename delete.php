<?php 
require "data.php";
?>
<html>
    <head>
        <h3>delete sucess!!</h3><br>
    </head>
    <body>
        <form>
            <input type=text method="POST">
            <input type="submit" value="delete ok">
        </form>
         <?php
    $query="DELETE FROM firebird WHERE id=".$_POST['deleteID'];
    $result=mysqli_query($conn,$query);
    
    while($row=mysqli_fetch_assoc($result)){
        echo $row['id']."<br>";
        echo $row['userID']."<br>";
        echo $row['userScore']."<br><br>"; 
    }
   
    ?>
    <meta http-equiv="refresh" content="2;url=http://localhost/FireBird/connect.php" />
    </body>
   
</html>