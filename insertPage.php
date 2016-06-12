<?php 
require "data.php";
?>
<html>
    <head>
        <h3>delete page</h3><br>
    </head>
    <body>
        <form action="insert.php" method="POST">
            <input type=text name="userID" value="Input userID" onfocus="this.value=''" onblur="if(this.value='')this.value=value" method="POST"><br>
            <input type=text name="userScore" value="Input userScore" onfocus="this.value=''" onblur="if(this.value='')this.value=value"method="POST"><br>
            <input type="submit" value="insert ok">
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