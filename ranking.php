<html>
    <head>
        <link rel="stylesheet" href="style.css" type="text/css";
    </head>
    <body>
        <p>ranking</p>
        <?php
        require "data.php";
        $query=mysqli_query($conn,"SELECT *FROM firebird ORDER BY userScore DESC");
        $no=1;
        echo "<table id='rank' border='2'>";
        echo "<th>no</th><th>id</th><th>user id</th><th>score</th>";
        while($row=mysqli_fetch_assoc($query)){
           echo "<tr>";
           echo "<td>".$no++."</td><td>".$row['id']."</td><td>".$row['userID']."</td><td>".$row['userScore']."</td>"; 
           echo "</tr>"; 
        }
        echo "</table>"
        ?>
        <br>
        <a href="http://localhost/FireBird/connect.php">goto main</a>
    </body>

</html>