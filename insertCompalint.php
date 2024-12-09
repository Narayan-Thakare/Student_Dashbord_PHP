<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    $complaint = $_POST["complaint"];
    $fname = $_POST["First_Name"]; 
    $Email = $_POST["Email_Address"]; 

    // Database connection details
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "asteriscstudents";

    // Create connection
    $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, 3306);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    // Prepare and execute the SQL query to insert the complaint
    $sql = "INSERT INTO complaint_box (name, email_id, date, complaint) VALUES (?, ?, NOW(), ?)";
    $stmt = $con->prepare($sql);
    // Assuming name and email_id are also submitted in the form, adjust the following line accordingly

    $stmt->bind_param("sss", $fname,$Email, $complaint);
    
    if ($stmt->execute()) {
        echo "Complaint submitted successfully.";
        
        // Redirect to index.php after successful submission
        header("Location: index.php");
         // Make sure to exit after redirecting
    } else {
        echo "Error: Unable to submit complaint.";
    }


    
} else {
    echo "Invalid request.";
}
?>