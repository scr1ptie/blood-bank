<?php
 
$servername = "localhost";
$username = "blood";
$password = "blood";
$dbname = "blood";
 
// Create connection
$conn = new mysqli($servername,
    $username, $password, $dbname);
 
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

$city =  $_REQUEST['city'];
$bg = $_REQUEST['bg'];
$age =  $_REQUEST['age'];
$hospital = $_REQUEST['hospital'];
$reason = $_REQUEST['reason'];

$sql = "INSERT INTO req VALUES ('$city',
            '$bg','$age','$hospital','$reason')";

if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully.</h3>";

} else{
    echo "ERROR: Sorry $sql. "
        . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);

?>
