<?php
require "data.php";
$id=$_POST['userID'];
echo $_POST["userID"];
echo "<br>";
if($id=="aaa"){
    echo "chack data!!";
    echo("<meta http-equiv='refresh' content='0' url='http://localhost/FireBird/connect.php'>");
}else{
    echo "who are you?";
}
?>