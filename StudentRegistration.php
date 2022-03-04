<?php
$servername = "localhost";
$username = "root";
$password = "yourPass@mysql";
$dbName = "yourDB";

// Create connectio

$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error());
}
 echo "Connected";


// creating table in Mydb called database.

$sql = "CREATE TABLE Student_info (
firstname VARCHAR(30) NOT NULL,
birth_date VARCHAR(50),
class VARCHAR(10),
gender VARCHAR(10)
)";

if($conn->query($sql) === TRUE) {
	echo "Table created succesfully";
} else {
	echo "table creating error" . $conn->error;
}
*/






// INSERTING INFOR INTO TABLE
$sql = "INSERT INTO Student_info (firstname, birth_date, class, gender) VALUES ('Reta', '19990', '101', 'M')";

if ($conn->query($sql) === TRUE) {
	$last_id = $conn->insert_id;
  echo "New record created successfully";
  echo "lastly entered id is ".$last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}







// SELECTING ALL INFORMATION.
$results = mysqli_query($db,"SELECT * FROM info");
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "name: " . $row["id"]. " class: " . $row["firstname"]. " " . $row["class"]. "<br>";
  }
} else {
  echo "0 results";
}





//  SEARCHING  on all data only THE SPECIFIED ONE;

$sql = "SELECT firstname, class FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "name: " . $row["id"]. " class: " . $row["firstname"]. " " . $row["class"]. "<br>";
  }
} else {
  echo "0 results";
}
*/




//  SEARCHING STUDENT INFO.

$sqls = "select * FROM MyGuests WHERE name = 'Reta' ";


$value = $conn->query($sqls);
if($value->num_rows > 0) {
	while($row = $value->fetch_assoc()) {
		echo "id :" . $row["id"] . "Name : " . $row["firstname"] . " " . $row["lastname"]. "<br>";
	}
}


$conn->close();
?>
