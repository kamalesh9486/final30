<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>
    <link rel="stylesheet" href="styles1.css">
</head>
<body>
    <h1>Student  Information Form</h1>
    <form action="submit.php" method="POST" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="registerNumber">Register Number:</label>
        <input type="text" id="registerNumber" name="registerNumber" required><br>

        <label for="course">Course Name:</label>
        <input type="text" id="cname" name="cname" required><br><br>
        

        <label for="mobile">Mobile Number:</label>
        <input type="tel" id="mobile" name="mobile" pattern="[0-9]{10}" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="4" required></textarea><br><br>

        <label for="idCard">Upload ID Card:</label>
      
       <input type="file" id="idCard" name="idCard" accept="image/*" required><br><br>
       <label for="grievance">Grievance:</label>
        <select id="grievance" name="grievance" required>
            <option value="Select"> </option>
            <option value="Course Completion Certificte">Course Completion Certificte</option>
            <option value="Result">Result</option>
            <option value="Current Mark Statement">Current Mark Statement</option>
            <option value="Consolidated Mark Statement">Consolidated Mark Statement</option>
            <option value="Provisional Certificte">Provisional Certificte</option>
            <option value="Grievance Certificte">Grievance Certificte</option>
            <option value="PSTM">PSTM</option>
          
        </select><br><br><br>
        
        <input type="submit" value="Submit">
    </form>
    <script src="newpage.js"></script>
</body>
</html>
