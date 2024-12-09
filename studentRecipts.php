<?php require 'config.php'; 

session_start();
$Email = $_SESSION['email'];

if($Email==true){

}else{
  header("location:/student_dashboard/student_register/login");
}
?>
<?php 

if(isset($Email)){

  $mb = $Email;

  $info = "SELECT student_id, full_name, gender, dob, email, branch, student_number, parent_number, course, c_name, batch_timing, photofile, city FROM student_admission WHERE email = '$mb'";

  $result = mysqli_query($con, $info);

  $rt = mysqli_fetch_array($result);
  $dp = $rt['photofile'];
  $stdid = $rt['student_id'];
  $fname = $rt['full_name'];
  $gender = $rt['gender'];
  $dob = $rt['dob'];
  $email = $rt['email'];
  $branch = $rt['branch'];
  $stuph = $rt['student_number'];
  $parph = $rt['parent_number'];
  $city = $rt['city'];
  $clgname = $rt['c_name'];
  $cname = $rt['course'];
  $batchtm = $rt['batch_timing'];
}
?>


<!DOCTYPE html>
<html lang="en">
  
<head>
    <!--Desgin by : Chandrakant Sir-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile -Asterisc.in</title>
    <link rel="shortcut icon" href="css/logo.png" />
    <meta name="author" content="Codeconvey" />

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css'>

    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" href="css/demo.css" />

    <link rel="stylesheet" href="css/style.css">
    <style>
      .menu:hover{
        text-decoration:none;
        color:black;
      }
      
      .menu{
        text-decoration:none;
        color:#313131;
        font-weight:bold;
        margin-left: 10px;
        
      }
      .menu1:hover{
        text-decoration:none;
        color:black;
      }
      
      .menu1{
        text-decoration:none;
        color:#313131;
        font-weight:bold;
    
        
      }
      .menu2{
 color:#FFF5EE;
 }
     
#about {
 
}

.about-us {
  background-image: url(about.png);
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  padding: 140px 0px 120px 0px;
}

.about-us .left-image {
  margin-right: 45px;
}

.about-us .services .item {
  margin-bottom: 30px;
}

.about-us .services .item .icon {
  float: left;
  margin-right: 25px;
}

.about-us .services .item .icon img {
  max-width: 70px;
}

.about-us .services .item h4 {
  color: #fff;
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 12px;
}

.about-us .services .item p {
  color: #fff;
}
.up1{
    margin-top: -8pc;
}
.up{
  margin-top: -5pc;
}

      
      </style>
       <script src="script.js"></script>
</head>

<body>



    <!-- <div class="ScriptTop">
    <div class="rt-container">
        <div class="col-rt-4" id="float-right">
 
            
        </div>
        <div class="col-rt-2">
            <ul>
                <li><a href="https://codeconvey.com/html-code-for-student-profile" title="Back to tutorial page">Back to Tutorial</a></li>
            </ul>
        </div>
    </div>
</div> -->
	

<header class="ScriptHeader about-us section" >

    <div class="rt-container">
    	<div class="col-rt-12 ">
        	<div class="rt-heading up ">
            	<h1 style=" font-size:40px; color:#FFFDD0;">Welcome to Asterisc Student Profile</h1>
                <p style="color:#FFF5EE">A responsive student profile page design.</p>
                <marquee style="color:#FFF5EE" width="100%" direction="left" >
                  Please ensure that you submitted your fees on your due date otherwise, you have to pay the fine with your fees. Fine amount is Rs 200 per day. 
                  Kindly ignore the message if you already paid the fees.</marquee>
            </div>
        </div>
    </div>
</header>

    <section>
        <div class="rt-container">
            <div class="col-rt-12">
                <div class="Scriptcontent">

                    <!-- Student Profile -->
                    <div class="student-profile py-4 up1 ">
                        <div class="container">
                            <div >
                        <a href="index"class="menu menu2">Home > </a>
                        <span class="menu1 menu2">PERSONAL NOTIFICATION</span>
                        </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <img class="profile_img"   src="stuimg/<?php echo $dp ?>"  alt="student dp">
            <h3><?php echo $fname ?></h3>
          </div>
          <div class="card-body"> <!--   PRN  (Permanent Registration Number) -->
          <p class="mb-0"><strong class="pr-1">PRN ID :</strong><?php echo $stdid ?></p>
          <p class="mb-0"><strong class="pr-1">Course :</strong><?php echo $cname ?></p>
           <p class="mb-0"><strong class="pr-1">Date of Birth :</strong><?php echo $dob  ?></p>
          <p class="mb-0"><strong class="pr-1">Batch Timing :</strong><?php echo $batchtm ?></p>
                                        
          </div>
        </div>

        <div style="height: 20px"></div>

        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="fa fa-link"></i> Important Links</h3>
          </div>
          <div class="card-body pt-0">
          <table class="table table-bordered">
                      <tr style="background-color: #FFF;">
                          <td><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">HOME</a></td>
                        </tr>

                        <tr>
                          <td>&nbsp;<i class="fa fa-credit-card-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="payment?email=<?php echo $mb ?>">FEES PAYMENT</a></td>
                        </tr>
                        <tr>
                          <td>&nbsp;<i class="fa fa-inr"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="payment_details?email=<?php echo $mb ?>">FEES DETAILS</a></td>
                        </tr>
                        <tr style="background-color: #FFF;">
                          <td><i class="fa fa-cog"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="edit_profile?email=<?php echo $mb ?>">EDIT PROFILE</a></td>
                        </tr>
                        <tr>
                          <td><i class="fa fa-briefcase"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="internship?email=<?php echo $mb ?>">INTERNSHIP</a></td>
                        </tr>
                        <tr style="background-color: #FFF;">
                          <td><i class="fa fa-phone-square"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="job_call">JOB CALLS</a></td>
                        </tr>

                        <tr style="background-color: #FFF;">
                          <td><i class="fa fa-bell"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="notification.php">NOIFICATION</a></td>
                        </tr>

                        <tr style="background-color: #FFF;">
                          <td><i class="fa fa-bell"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="personalnotification.php">PERSONAL NOIFICATION</a></td>
                        </tr>







                        <tr style="background-color: #FFF;">
                                                    <td><i class="fa fa-user-circle"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="institute_detail.php">INSTITUTE DETAILS</a></td>
                                                </tr>
                        <tr>

                        <tr style="background-color: #FFF;">
                                                    <td><i class="fa fa-download"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="downlode.php">DOWNLODE</a></td>
                                                </tr>
                        <tr>

                        <tr style="background-color: #FFF;">
                                                    <td><i class="fa fa-commenting"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="complaintBox.php">COMPLAINT BOX</a></td>
                                                </tr>
                        <tr>

                        <tr style="background-color: #FFF;">
                                                    <td><i class="fa fa-user-plus"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="enrollmentForm.php">ENROLLMENT FORM</a></td>
                                                </tr>
                        <tr>
                         
                        <tr style="background-color: #FFF;">
                                                    <td><i class="fa fa-video-camera"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="videoTotorial.php">VIDEO TOTORIAL</a></td>
                                                </tr>
                        <tr>



                        <tr style="background-color: #FFF;">
                                                    <td><i class="fa fa-id-badge"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="StudentID.php">STUDENT ID CARD</a></td>
                                                </tr>
                        <tr>

                        

                        <tr style="background-color: #FFF;">
                                                    <td><i class="fa fa-file"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="studyMaterial.php">STUDY MATERIAL</a></td>
                                                </tr>
                        <tr>

                        <tr style="background-color: #FFF;">
                                                    <td><i class="fa fa-briefcase"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="AsteriscIntrnship.php">ASTERISC INTERNSHIP</a></td>
                                                </tr>
                        <tr>




                          <td><i class="fa fa-asterisk"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="rules?email=<?php echo $mb ?>">RULES AND REGULATIONS</a></td>
                        </tr>
                        <tr>
                          <td><i class="fa fa-power-off"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout">LOGOUT</a></td>
                        </tr>
                        <!--<tr>-->
                        <!--  <td><i class="fa fa-asterisk"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">COMPLAINTS</a></td>-->
                        <!--</tr>-->

                      </table>
          </div>
        </div>
        <div style="height: 26px"></div>
      </div>
      
      <div class="col-lg-8">
        <div class="card shadow-sm" >
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="fa fa-receipt"></i>&nbsp;STUDENT PAYMENT SLIPS</h3>

          </div>
          <div class="card-body pt-0">
          
            <div class="cardOutline tapItem fs-unmask result job_e79ef11e07e399ed resultWithShelf sponTapItem desktop vjs-highlight css-kyg8or eu4oa1w0">
              <div class="slider_container css-g7s71f eu4oa1w0">

       
              <div class="slider_list css-kyg8or eu4oa1w0">
                  <div class="slider_item css-kyg8or eu4oa1w0">
                    <div class="job_seen_beacon">
                      <table class="jobCard_mainContent big6_visualChanges" cellpadding="0" cellspacing="0" role="presentation">
                        <tbody><tr><td class="resultContent">
                          <div class="css-1m4cuuf e37uo190">
                            <h2 class="jobTitle jobTitle-newJob css-bdjp2m eu4oa1w0" tabindex="-1">
                            

</div>


                      
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = '';
$dbname = "asteriscstudents";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname, 3306);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($Email) && $Email == true) {
    // Continue if $Email is set and true
} else {
    // Redirect to login page if $Email is not set or false
    header("location: /student_dashboard/student_register/login.php");
    exit(); // Make sure to exit after a header redirect
}

// Include your database connection code here
// Example: $con = new mysqli("hostname", "username", "password", "database_name");

if (isset($Email)) {
  $invoice_data = $_POST['invoice_data'];
// Use $invoice_data in your PHP code

    $mb = $Email;
    $info = "SELECT * FROM fees_details WHERE email = '$mb' AND Stu_inv = '$invoice_data'";
    $result = mysqli_query($con, $info);
   if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="payment-slip">';
        echo '<h1 style="text-align: center; color: purple;">ASTERISC COMPUTER INSTITUTE</h1>';
        echo '<h2 style="text-align: center;">Payment Slip</h2>';
        
        // Multicolor Line
        echo '<div style="width: 100%; height: 3px; background: linear-gradient(90deg, #FF5733, #FFC300, #33FF57);"></div>';
        
        echo '<div class="student-details">';
        //echo '<p><strong>Student Name:</strong> ' . $row['student_name'] . '</p>';
        echo '<p><strong>Student Email:</strong> ' . $row['email'] . '</p>';
        echo '</div>';
        
        echo '<div class="payment-details">';
        echo '<p><strong>Total Fees:</strong> $' . $row['Stu_total'] . '</p>';
        echo '<p><strong>Status:</strong> ' . $row['Stu_status'] . '</p>';
        echo '<p><strong>Invoice Date:</strong> ' . $row['Stu_inv_date'] . '</p>';
        echo '<p><strong>Due Date:</strong> ' . $row['Stu_due_date'] . '</p>';
        echo '</div>';
        echo '<p style="border-top: 2px solid purple;"></p>'; // Purple line above payment instructions
        echo '<p class="payment-instructions">Please make the payment by the due date mentioned above....</p>';
    }}}
       ?>


<!-- <?php
// Assuming you have already established a database connection and fetched the necessary data

$font = "./BebasNeue-Regular.ttf";
$name = "example"; // Replace with the actual name
$email = "example@email.com"; // Replace with actual email
$Stu_total = "100.00"; // Replace with actual total
$Stu_status = "Paid"; // Replace with actual status
$Stu_due_date = "2023-09-10"; // Replace with actual due date

// Check if the image file exists
$imagePath = "/student_dashboard/student_register/images/receipt.jpg"; // Replace with the actual image path

// Check if the image file exists
$imagePath = "./student_dashboard/student_register/images/receipt.jpg"; // Use a relative path
if (file_exists($imagePath)) {
    $image = imagecreatefromjpeg($imagePath);
    // The rest of your code...
    echo "if code work fdgnbd 1";

} else {
    echo 'Error: Image file does not exist.';
}

echo "if code work";
echo $imagePath;

if (!file_exists($imagePath)) {
  echo "if code work 1";
    $image = imagecreatefromjpeg($imagePath);
    if ($image !== false) {
        $color = imagecolorallocate($image, 19, 21, 22);

        // Adjust coordinates and font size as needed
        imagettftext($image, 45, 0, 50, 150, $color, $font, $email);
        imagettftext($image, 45, 0, 50, 250, $color, $font, $Stu_total);
        imagettftext($image, 28, 0, 50, 350, $color, $font, $Stu_status);
        imagettftext($image, 25, 0, 50, 450, $color, $font, $Stu_due_date);

        // Save the image as JPG
        $imageSavePath = "./receipt/" . $name . ".jpg";
        imagejpeg($image, $imageSavePath);

        // PDF generation
        require('fpdf.php'); // Make sure to include the FPDF library

        $pdf = new FPDF('P', 'mm', 'A4'); // Use 'mm' units and A4 size
        $pdf->AddPage();
        $pdf->Image($imageSavePath, 10, 10, 190); // Adjust dimensions as needed

        // Save the PDF
        $pdfPath = "./receipt/" . $name . ".pdf";
        $pdf->Output($pdfPath, "F");

        // Clean up resources
        imagedestroy($image);

        // Provide download links for both the image and PDF
        echo "<a href='" . $imageSavePath . "' download='" . $name . ".jpg' class='download-button'>
            Download Image
        </a>";

        echo "<a href='" . $pdfPath . "' download='" . $name . ".pdf' class='pdf-download-button'>
            Download PDF
        </a>";
    } else {
        echo 'Error: Unable to create image from JPEG.';
    }
} else {
    echo 'Error: Image file does not exist.';
}
?> -->




                                        
                                        </div>
                                      </div>
                                            <div class="heading6 error-text tapItem-gutter">

                                            </div>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
</ul></div></div></div></div></div></div>
        
<div class="card-body pt-0">
          
                                      </div>
                                            <div class="heading6 error-text tapItem-gutter">

                                            </div>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
</ul></div></div></div></div></div>

<a href="next.php" class="btn btn-light nex">Next</a>
</div>
<!-- partial -->
           
    		</div>
		</div>
    </div>
</section>
     

    <!-- Analytics -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>