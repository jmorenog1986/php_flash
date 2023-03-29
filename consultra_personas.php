<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "prueba";

 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 }


 $conn->set_charset("utf8");
 $sql = "SELECT * FROM personas";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<a href="p.php?u='.$row['documento'].'">'.$row['documento'].'</a> '.$row['nombres'].' '.$row['apellidos'].' '.$row['email'].'<br>';
  }
} else {
  echo "0 results";
}

 $conn->close();

?>