<?php
// Start session at the beginning of the script
session_start();

// Check if register number is set in session
if (!isset($_SESSION['register_number'])) {
    die("No register number found. Please submit the form first.");
}

// Get the register number from the session
$register_number = $_SESSION['register_number'];

require_once('config/db.php');

// Modify the query to filter by register_number
$query = "SELECT * FROM `student_grievances` WHERE `register_number` = '$register_number'";
$result = mysqli_query($con, $query);


if (!$result) {
    die("Query failed: " . mysqli_error($con));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grievances</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    <div class="container">
        <h2>Student Grievances</h2>
        <?php if (mysqli_num_rows($result) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>Grievance Type</th>
                        
                        <!-- Add other columns as necessary -->
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['grievance_type']); ?></td>
                            
                            <!-- Add other columns as necessary -->
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No grievances found for this student.</p>
        <?php endif; ?>
    </div>

    <div class="container">
        <h2>Upload Documents</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <label for="document1">Fees Payment Details:</label>
            <input type="file" name="document1" id="document1" accept=".pdf, .doc, .docx">
            
            <label for="document2">Hall Ticket:</label>
            <input type="file" name="document2" id="document2" accept=".pdf, .doc, .docx">
            
            <label for="document3">Exam Application Form:</label>
            <input type="file" name="document3" id="document3" accept=".pdf, .doc, .docx">
            
            <label for="document4">Available Mark Statement:</label>
            <input type="file" name="document4" id="document4" accept=".pdf, .doc, .docx">
            
            <label for="document5">Consolidated Mark Statement:</label>
            <input type="file" name="document5" id="document5" accept=".pdf, .doc, .docx">
            
            <label for="document6">Course Completion Certificate:</label>
            <input type="file" name="document6" id="document6" accept=".pdf, .doc, .docx">
            
            <label for="document7">Application Fees:</label>
            <input type="file" name="document7" id="document7" accept=".pdf, .doc, .docx">
            
            <input type="submit" value="Upload Documents">
        </form>
    </div>
</body>
</html>

<?php
// Close the database connection
mysqli_close($con);
?>
