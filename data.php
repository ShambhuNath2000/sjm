<?php
$servername = "localhost";
$username = "root";
$password = ""; // Provide a password if required by your MySQL server.
$dbname = "emp";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$mobileno = $_POST['mobileno'];
$gender = $_POST['gender'];
$message = $_POST['message'];

$sql = "INSERT INTO emp_data (firstname, lastname, email, mobileno, gender, message) 
            VALUES ('$firstname', '$lastname', '$email', '$mobileno', '$gender', '$message')";

if ($conn->query($sql) === TRUE) {
    
    echo "New record created successfully";
    $sql = "SELECT * FROM emp_data where email='$email'";
    $result = $conn->query($sql);
    
    // Display data in an HTML table
    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>firstName</th><th>lastname</th><th>Email</th><th>Gender</th><th>Mobileno.</th><th>message</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td><td>" . $row["email"]. "</td><td>" . $row["gender"]. "</td><td>" . $row["mobileno"]. "</td><td>" . $row["message"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>