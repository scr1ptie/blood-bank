<?php
$servername = "localhost";
$username = "blood";
$password = "blood";
$dbname = "blood";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM req";
$result = $conn->query($sql);

echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">City</font> </td> 
          <td> <font face="Arial">Blood Group</font> </td> 
          <td> <font face="Arial">Age</font> </td> 
          <td> <font face="Arial">Hospital</font> </td> 
          <td> <font face="Arial">Reason</font> </td> 
      </tr>';

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {

    echo '<tr> 
          <td>'.$row["city"].'</td> 
          <td>'.$row["blood_group"].'</td> 
          <td>'.$row["age"].'</td> 
          <td>'.$row["hospital"].'</td>
          <td>'.$row["reason"].'</td> 
      </tr>
      ';
  }
} else {
  echo "0 results";
}

echo '</table>';
$conn->close();
?>
