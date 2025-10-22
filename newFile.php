<?php
$servername = "localhost";
$username = "root";
$password = "Pass4!!";
$dbname = "gp_surgery";
$port = 3306;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

include 'dbcon.php';

$visitDate = $_POST['visitDate'];
$patientID = $_POST['patientID'];
$doctorID = $_POST['doctorID'];
$reason = $_POST['reason'];
$notes = $_POST['notes'];

$sql = "INSERT INTO Visit (visitDate, patientID, doctorID, reason, notes)
        VALUES ('$visitDate', '$patientID', '$doctorID', '$reason', '$notes')";

echo "<p><strong>Generated SQL:</strong> $sql</p>";

mysqli_close($conn);
?>



