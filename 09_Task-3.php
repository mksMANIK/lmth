<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "Student"; 

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert sample data
$sql = "INSERT INTO Semester_Reg (Name, Session, Phone_No, City, Gender) VALUES ('Doe', '2017-2018', '1234567890', 'Pabna', 'Male')";
if ($conn->query($sql) === TRUE) {
    echo "Sample data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
