<?php
// Start session at the beginning of the script
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vinzo1";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind parameters
    $stmt = $conn->prepare("INSERT INTO student_grievances (name, register_number, course_name, mobile, email, address, id_card_filename, grievance_type) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $name, $register_number, $course_name, $mobile, $email, $address, $id_card_filename, $grievance_type);

    // Set parameters and execute
    $name = $_POST['name'];
    $register_number = $_POST['registerNumber'];
    $course_name = $_POST['cname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $id_card_filename = $_FILES['idCard']['name'];
    $grievance_type = $_POST['grievance'];

    // Move uploaded file to desired location
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["idCard"]["name"]);
    move_uploaded_file($_FILES["idCard"]["tmp_name"], $target_file);

    // Execute prepared statement
    if ($stmt->execute()) {
        // Store register number in session
        $_SESSION['register_number'] = $register_number;
        
        // Redirect to a new page after form submission
        header("Location: uploadsection.php");
        exit; // Ensure that subsequent code is not executed after redirection
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
