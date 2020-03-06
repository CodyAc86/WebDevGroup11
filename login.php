<?php include "header.php"; ?>
<?php 
include "db.php";

$conn = mysqli_connect("localhost", "BedCor", "1234Password", "Login");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, username, password FROM login";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"] . "</td><td>"
. $row["password"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();

include "footer.php";?>