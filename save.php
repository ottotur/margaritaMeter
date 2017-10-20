<?php
require_once('connect.php');
$dbb = mysqli_connect($servername, $username, $password, $database)
  or die('Error communicating to MySQL server.');
 
  if(isset($_POST['name']) and isset($_POST['id']) and isset($_POST['grade'])and isset($_POST['restaurant'])){
    $name=$_POST['name'];
    $fbid=$_POST['id'];
    $grade=$_POST['grade'];
    $restaurant=$_POST['restaurant'];
    date_default_timezone_set('Europe/Helsinki');
    $time =date('Y-m-d H:i:s');
    echo $restaurant;
    	echo "<br>";
    echo $name;
    echo "<br>";
    echo $time;
    $sql = "INSERT INTO arvosana (name,restaurant,grade,time) VALUES ('$name','$restaurant',$grade,'$time')";
    if (mysqli_query($dbb, $sql)) {
    echo "<br>New record created successfully";
} else {
    echo "<br>Error: " . $sql . "<br>" . mysqli_error($conn);
}

    mysqli_close($dbb);   
  }

?>