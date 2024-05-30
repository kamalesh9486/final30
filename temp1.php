<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Upload</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            color: #333;
        }

        button {
            margin: 5px;
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            color: #555;
        }

        input[type="file"] {
            margin-top: 5px;
        }

        input[type="submit"] {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #28a745;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h2>Choose an option:</h2>
    <button id="choice1">1</button>
    <button id="choice2">2</button>
    <button id="choice3">3</button>
    <button id="choice4">4</button>
    <button id="choice5">5</button>
    <button id="choice6">6</button>
    <button id="choice7">7</button>
    <form id="uploadForm" action="upload.php" method="post" enctype="multipart/form-data">
        <label for="document1" id="label1">Fees Payment Details:</label>
        <input type="file" name="document1" id="document1" accept=".pdf, .doc, .docx">
        
        <label for="document2" id="label2">Hall Ticket:</label>
        <input type="file" name="document2" id="document2" accept=".pdf, .doc, .docx">
        
        <label for="document3" id="label3">Exam Application Form:</label>
        <input type="file" name="document3" id="document3" accept=".pdf, .doc, .docx">
        
        <label for="document4" id="label4">Available Mark Statement:</label>
        <input type="file" name="document4" id="document4" accept=".pdf, .doc, .docx">
        
        <label for="document5" id="label5">Consolidated Mark Statement:</label>
        <input type="file" name="document5" id="document5" accept=".pdf, .doc, .docx">
        
        <label for="document6" id="label6">Course Completion Certificate:</label>
        <input type="file" name="document6" id="document6" accept=".pdf, .doc, .docx">
        
        <label for="document7" id="label7">Application Fees:</label>
        <input type="file" name="document7" id="document7" accept=".pdf, .doc, .docx">
        
        <label for="document8" id="label8">Genuine Certificate Fees:</label>
        <input type="file" name="document8" id="document8" accept=".pdf, .doc, .docx">
        
        <label for="document9" id="label9">PSTM:</label>
        <input type="file" name="document9" id="document9" accept=".pdf, .doc, .docx">
        
        <input type="submit" value="Upload Documents">
    </form>

    <script>
        // Function to toggle visibility of sections based on choice
        function toggleSections(choice) {
            // Hide all sections and labels by default
            for (var i = 1; i <= 9; i++) {
                document.getElementById('label' + i).style.display = 'none';
                document.getElementById('document' + i).style.display = 'none';
            }

            // Show specific sections and labels based on choice
            switch (choice) {
                case '1':
                    document.getElementById('label1').style.display = 'block';
                    document.getElementById('document1').style.display = 'block';
                    break;
                case '2':
                    document.getElementById('label2').style.display = 'block';
                    document.getElementById('document2').style.display = 'block';
                    document.getElementById('label1').style.display = 'block';
                    document.getElementById('document1').style.display = 'block';
                    document.getElementById('label3').style.display = 'block';
                    document.getElementById('document3').style.display = 'block';
                    break;
                case '3':
                    document.getElementById('label4').style.display = 'block';
                    document.getElementById('document4').style.display = 'block';
                    break;
                case '4':
                    document.getElementById('label2').style.display = 'block';
                    document.getElementById('document2').style.display = 'block';
                    document.getElementById('label1').style.display = 'block';
                    document.getElementById('document1').style.display = 'block';
                    document.getElementById('label3').style.display = 'block';
                    document.getElementById('document3').style.display = 'block';
                    document.getElementById('label4').style.display = 'block';
                    document.getElementById('document4').style.display = 'block';
                    break;
                case '5':
                    document.getElementById('label6').style.display = 'block';
                    document.getElementById('document6').style.display = 'block';
                    document.getElementById('label5').style.display = 'block';
                    document.getElementById('document5').style.display = 'block';
                    break;
                case '6':
                    document.getElementById('label8').style.display = 'block';
                    document.getElementById('document8').style.display = 'block';
                    break;
                case '7':
                    document.getElementById('label9').style.display = 'block';
                    document.getElementById('document9').style.display = 'block';
                    break;
                default:
                    break;
            }
        }

        // Initially hide all sections except the first choice
        toggleSections('1');

        // Event listeners for choice buttons
        document.getElementById('choice1').addEventListener('click', function() {
            toggleSections('1');
        });

        document.getElementById('choice2').addEventListener('click', function() {
            toggleSections('2');
        });

        document.getElementById('choice3').addEventListener('click', function() {
            toggleSections('3');
        });

        document.getElementById('choice4').addEventListener('click', function() {
            toggleSections('4');
        });

        document.getElementById('choice5').addEventListener('click', function() {
            toggleSections('5');
        });

        document.getElementById('choice6').addEventListener('click', function() {
            toggleSections('6');
        });

        document.getElementById('choice7').addEventListener('click', function() {
            toggleSections('7');
        });

        // Prevent form submission for now
        document.getElementById('uploadForm').addEventListener('submit', function(event) {
            event.preventDefault();
            // Form submission logic can be added here
        });
    </script>
</body>
</html>
