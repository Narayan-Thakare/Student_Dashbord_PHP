
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

<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                        <span class="menu1 menu2">Job Calls</span>
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
    <tr style="background-color: #fff;">
        <td>
            <i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">HOME</a>
        </td>
    </tr>
    <tr x-data="{ isOpen: false }" @click.away="isOpen = false" @keydown.escape="isOpen = false" style="background-color: #fff;">
        <td>
            <div x-on:click="isOpen = !isOpen" class="relative">
            <i class="fa fa-toggle-down"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a style="color: #007bff;" class="cursor-pointer">PAYMENT DETAILS</a>
                <div x-show="isOpen" class="absolute mt-2 py-2 w-48 bg-white border rounded-lg shadow-lg">
                <a href="payment?email=<?php echo $mb ?>" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                    <i class="fa fa-credit-card-alt" style="color: black;"></i>  Fees Payment
                       </a>
                    <!-- Add more options here -->

                </div>

                <div x-show="isOpen" class="absolute mt-2 py-2 w-48 bg-white border rounded-lg shadow-lg">
                   <a href="payment_details?email=<?php echo $mb ?>" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                    <i class="fa fa-inr" style="color: black;"></i> Fees Details
                       </a>
                    <!-- Add more options here -->

                </div>
                


            </div>
        </td>
    </tr>
<!-- /////////////////////////////////////////////////////////////////////////// -->

    <tr x-data="{ isOpen: false }" @click.away="isOpen = false" @keydown.escape="isOpen = false" style="background-color: #fff;">
        <td>
            <div x-on:click="isOpen = !isOpen" class="relative">
            <i class="fa fa-toggle-down"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a style="color: #007bff;" class="cursor-pointer">COURSES</a>
                <div x-show="isOpen" class="absolute mt-2 py-2 w-48 bg-white border rounded-lg shadow-lg">
                   <a href="videoTotorial.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                    <i class="fa fa-video-camera" style="color: black;"></i> VIDEO TUTORIAL
                       </a>
                    <!-- Add more options here -->

                </div>

                <div x-show="isOpen" class="absolute mt-2 py-2 w-48 bg-white border rounded-lg shadow-lg">
                   <a href="studyMaterial.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                    <i class="fa fa-file" style="color: black;"></i> STUDY MATERIAL
                       </a>
                    <!-- Add more options here -->

                </div>

                <div x-show="isOpen" class="absolute mt-2 py-2 w-48 bg-white border rounded-lg shadow-lg">
                   <a href="enrollmentForm.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                    <i class="fa fa-user-plus" style="color: black;"></i>  ENROLLMENT FORM
                       </a>
                    <!-- Add more options here -->

                </div>


                <div x-show="isOpen" class="absolute mt-2 py-2 w-48 bg-white border rounded-lg shadow-lg">
                   <a href="complaintBox.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                    <i class="fa fa-commenting" style="color: black;"></i> COMPLAINT BOX
                       </a>
                    <!-- Add more options here -->

                </div>



                <div x-show="isOpen" class="absolute mt-2 py-2 w-48 bg-white border rounded-lg shadow-lg">
                   <a href="downlode.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                    <i class="fa fa-download" style="color: black;"></i> DOWNLOAD
                       </a>
                    <!-- Add more options here -->

                </div>
                

                
            </div>
        </td>
    </tr>
    <!-- //////////////////////////////////////////////////////////////////////////////////////// -->

    <tr x-data="{ isOpen: false }" @click.away="isOpen = false" @keydown.escape="isOpen = false" style="background-color: #fff;">
        <td>
            <div x-on:click="isOpen = !isOpen" class="relative">
            <i class="fa fa-toggle-down"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a style="color: #007bff;" class="cursor-pointer">NOTIFICATIONS</a>
                <div x-show="isOpen" class="absolute mt-2 py-2 w-48 bg-white border rounded-lg shadow-lg">
                   <a href="notification.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                    <i class="fa fa-bell" style="color: black;"></i>BATCH NOTIFICATION
                       </a>
                    <!-- Add more options here -->

                </div>

                <div x-show="isOpen" class="absolute mt-2 py-2 w-48 bg-white border rounded-lg shadow-lg">
                   <a href="personalnotification.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                    <i class="fa fa-bell" style="color: black;"></i> PERSONAL NOTIFICATION
                       </a>
                    <!-- Add more options here -->

                </div>
                

                
            </div>
        </td>
    </tr>






    <!-- ////////////////////////////////////////////////////////////////////////////////////////// -->


    <tr x-data="{ isOpen: false }" @click.away="isOpen = false" @keydown.escape="isOpen = false" style="background-color: #fff;">
        <td>
            <div x-on:click="isOpen = !isOpen" class="relative">
            <i class="fa fa-toggle-down"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a style="color: #007bff;" class="cursor-pointer">JOB CALLS AND INTERNSHIP</a>
                <div x-show="isOpen" class="absolute mt-2 py-2 w-48 bg-white border rounded-lg shadow-lg">
                   <a href="AsteriscIntrnship.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                    <i class="fa fa-briefcase" style="color: black;"></i> ASTERISK INTERNSHIP
                       </a>
                    <!-- Add more options here -->

                </div>

                <div x-show="isOpen" class="absolute mt-2 py-2 w-48 bg-white border rounded-lg shadow-lg">
                   <a href="job_call" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                    <i class="fa fa-phone-square" style="color: black;"></i>JOB CALLS
                       </a>
                    <!-- Add more options here -->

                </div>
                
                <div x-show="isOpen" class="absolute mt-2 py-2 w-48 bg-white border rounded-lg shadow-lg">
                   <a href="internship?email=<?php echo $mb ?>" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                    <i class="fa fa-briefcase" style="color: black;"></i>INTERNSHIP
                       </a>
                    <!-- Add more options here -->

                </div>
                
            </div>
        </td>
    </tr>

<!-- ///////////////////////////////////////////////////////////////////// -->


<tr x-data="{ isOpen: false }" @click.away="isOpen = false" @keydown.escape="isOpen = false" style="background-color: #e9e8e8;">
        <td>
            <div x-on:click="isOpen = !isOpen" class="relative">
            <i class="fa fa-toggle-down"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a style="color: #007bff;" class="cursor-pointer">OTHERS</a>
                





                <div x-show="isOpen" class="absolute mt-2 py-2 w-48" style="background-color: lightblue; border: 1px solid #000; border-radius: 8px; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);">
                <a href="institute_detail.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
        <i class="fa fa-user-circle" style="color: black;"></i>  INSTITUTE DETAILS
    </a>
    <!-- Add more options here -->
</div>




                <div x-show="isOpen" class="absolute mt-2 py-2 w-48 bg-white border rounded-lg shadow-lg">
                   <a href="StudentID.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                    <i class="fa fa-id-badge" style="color: black;"></i>  STUDENT ID CARD
                       </a>
                    <!-- Add more options here -->

                </div>
                
                <div x-show="isOpen" class="absolute mt-2 py-2 w-48 bg-white border rounded-lg shadow-lg">
                   <a href="edit_profile?email=<?php echo $mb ?>" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                    <i class="fa fa-cog" style="color: black;"></i>EDIT PROFILE
                       </a>
                    <!-- Add more options here -->

                </div>
                
                <div x-show="isOpen" class="absolute mt-2 py-2 w-48 bg-white border rounded-lg shadow-lg">
                   <a href="rules?email=<?php echo $mb ?>" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                    <i class="fa fa-asterisk" style="color: black;"></i>RULES AND REGULATIONS
                       </a>
                    <!-- Add more options here -->

                </div>


            </div>
        </td>
    </tr>



    <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    
    <tr style="background-color: #fff;">
        <td>
            <i class="fa fa-power-off"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout">LOGOUT</a>
        </td>
    </tr>

</table>

<script>
    function jobsMenuData() {
        return {
            isJobsMenuOpen: false,
            toggleJobsMenu() {
                this.isJobsMenuOpen = !this.isJobsMenuOpen;
            },
        };
    }
</script>
          </div>
        </div>
        <div style="height: 26px"></div>
      </div>
      
      <div class="col-lg-8">
        <div class="card shadow-sm" >
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="fa fa-phone-square"></i>&nbsp;OUR INSTITUTE</h3>

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

// Define the SQL query to select data from your table
$sql = "SELECT * FROM job_calls";

// Execute the SQL query
$result = $conn->query($sql);

// Check for errors
if (!$result) {
    die("Error: " . $conn->error);
}
?>


<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="cardOutline tapItem fs-unmask result job_e79ef11e07e399ed resultWithShelf sponTapItem desktop vjs-highlight css-kyg8or eu4oa1w0">';
        echo '<div class="slider_container css-g7s71f eu4oa1w0">';
        echo '<div class="slider_list css-kyg8or eu4oa1w0">';
        echo '<div class="slider_item css-kyg8or eu4oa1w0">';
        echo '<div class="job_seen_beacon">';
        echo '<table class="jobCard_mainContent big6_visualChanges" cellpadding="0" cellspacing="0" role="presentation">';
        echo '<tbody><tr><td class="resultContent">';
        echo '<div class="css-1m4cuuf e37uo190">';
        echo '<h2 class="jobTitle jobTitle-newJob css-bdjp2m eu4oa1w0" tabindex="-1">';
        echo '<a id="job_e79ef11e07e399ed" data-mobtk="1gp08q9hdjkbn800" data-jk="e79ef11e07e399ed" data-hiring-event="false" target="_blank" data-hide-spinner="true" role="button" aria-label="full details of Call Centre Agent" class="jcs-JobTitle css-jspxzf eu4oa1w0" href="/company/Hotel-Ashoka/jobs/Call-Centre-Agent-e79ef11e07e399ed?fccid=a24e67fa8e935553&amp;vjs=3">';
        echo '<h2><a href="#"><span title="Call Centre Agent" id="jobTitle-e79ef11e07e399ed">Branch name ' . $row['job_title'] . '</span></a></h2>';
        echo '<div class="new css-ud6i3y eu4oa1w0">';
       // echo '<span class="label css-1qj35nq omm eu4oa1w0">new</span>';
        echo '</div>';
        echo '</div>';
        echo '<div class="heading6 company_location tapItem-gutter companyInfo">';
        echo '<span class="companyName">branch address ' . $row['company_name'] . '</span>';
        echo '<div class="companyLocation"> Our Features ' . $row['location'] . '</div>';
        
        echo '</div>';
        echo '<div class="heading6 tapItem-gutter metadataContainer noJEMChips salaryOnly">';
        echo '<div class="metadata salary-snippet-container">';
        echo '<div class="attribute_snippet" data-testid="attribute_snippet_testid"> Courses'. $row['salary_range'] .' a month</div>';
        echo '</div>';
        echo '<div class="metadata"><div class="attribute_snippet" data-testid="attribute_snippet_testid">';
echo '  <svg width="14" height="13" viewBox="0 0 14 13" fill="none" role="presentation" xmlns="http://www.w3.org/2000/svg" aria-label="Job type" aria-hidden="true">';
echo '    <path fill="#595959" fill-rule="evenodd" d="M4.50226.5c-.27614 0-.5.223858-.5.5v2.1H.5c-.276142 0-.5.22386-.5.5v1.9h14V3.6c0-.27614-.2239-.5-.5-.5h-3.4977V1c0-.276142-.22389-.5-.50004-.5h-5Zm4.19962 2.6H5.30344V1.8h3.39844v1.3Z" clip-rule="evenodd"></path>';
echo '    <path fill="#595959" d="M5.70117 6.80005H0v5.20005c0 .2761.223857.5.5.5h13c.2761 0 .5-.2239.5-.5V6.80005H8.30117v.80322c0 .27614-.22386.5-.5.5h-1.6c-.27614 0-.5-.22386-.5-.5v-.80322Z"></path>';
echo '  </svg> &nbsp; Sir No. Work Time</div>';
echo '</div>';


        echo '</div>';
        echo '<div class="metadata"><div class="attribute_snippet" data-testid="attribute_snippet_testid">';
        echo '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 15" role="presentation" aria-hidden="true" aria-label="Shift" height="15px">';
        echo '<path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5C10.866 14.5 14 11.366 14 7.5C14 3.63401 10.866 0.5 7 0.5C3.13401 0.5 0 3.63401 0 7.5C0 11.366 3.13401 14.5 7 14.5ZM6.2496 4.25C6.2496 4.11193 6.36153 4 6.4996 4H7.2996C7.43767 4 7.5496 4.11193 7.5496 4.25V7.62406L9.62708 8.82349C9.74665 8.89252 9.78762 9.04542 9.71858 9.16499L9.31858 9.85781C9.24955 9.97739 9.09665 10.0184 8.97708 9.94932L6.25028 8.375H6.2496V8.37461L6.24805 8.37371L6.2496 8.37102V4.25Z" fill="#595959"></path>';
        echo '</svg> &nbsp;Mam NO. '. $row['employment_type'] .'</div>';
        echo '</div>';
        echo '<a href="'. $row['link'] .'" class="btn btn-light " ><svg xmlns="'. $row['link'] .'" width="16" height="16" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">';
        echo '<path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>';
        echo '</svg>&nbsp;Visit Institute</a>';
        echo '</div>';
        echo '</td></tr></tbody></table>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "<tr><td colspan='6'>No data found.</td></tr>";
}

// Close the database connection
//$conn->close();
?>

                                        
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
          
          <div class="cardOutline tapItem fs-unmask result job_e79ef11e07e399ed resultWithShelf sponTapItem desktop vjs-highlight css-kyg8or eu4oa1w0">
            <div class="slider_container css-g7s71f eu4oa1w0">
              <div class="slider_list css-kyg8or eu4oa1w0">
                <div class="slider_item css-kyg8or eu4oa1w0">
                  <div class="job_seen_beacon">
                    <table class="jobCard_mainContent big6_visualChanges" cellpadding="0" cellspacing="0" role="presentation">
                      <tbody><tr><td class="resultContent">
                        <div class="css-1m4cuuf e37uo190">
                          <h2 class="jobTitle jobTitle-newJob css-bdjp2m eu4oa1w0" tabindex="-1">
                            <a id="job_e79ef11e07e399ed" data-mobtk="1gp08q9hdjkbn800" data-jk="e79ef11e07e399ed" data-hiring-event="false" target="_blank" data-hide-spinner="true" role="button" aria-label="full details of Call Centre Agent" class="jcs-JobTitle css-jspxzf eu4oa1w0" href="/company/Hotel-Ashoka/jobs/Call-Centre-Agent-e79ef11e07e399ed?fccid=a24e67fa8e935553&amp;vjs=3">
                              <span title="Call Centre Agent" id="jobTitle-e79ef11e07e399ed">Call Centre Agent</span></a></h2>
                              <div class="new css-ud6i3y eu4oa1w0">
                                <span class="label css-1qj35nq omm eu4oa1w0">new</span>
                              </div>
                            </div>
                              <div class="heading6 company_location tapItem-gutter companyInfo">
                                <span class="companyName">CodeLine.AI Pvt Ltd</span>
                                <div class="companyLocation">Nagpur, Maharashtra</div>
                              </div>
                                <div class="heading6 tapItem-gutter metadataContainer noJEMChips salaryOnly">
                                  <div class="metadata salary-snippet-container">
                                    <div class="attribute_snippet" data-testid="attribute_snippet_testid"> ₹12,000 - ₹20,000 a month</div>
                                  </div>
                                    <div class="metadata"><div class="attribute_snippet" data-testid="attribute_snippet_testid">
                                      <svg width="14" height="13" viewBox="0 0 14 13" fill="none" role="presentation" xmlns="http://www.w3.org/2000/svg" aria-label="Job type" aria-hidden="true">
                                        <path fill="#595959" fill-rule="evenodd" d="M4.50226.5c-.27614 0-.5.223858-.5.5v2.1H.5c-.276142 0-.5.22386-.5.5v1.9h14V3.6c0-.27614-.2239-.5-.5-.5h-3.4977V1c0-.276142-.22389-.5-.50004-.5h-5Zm4.19962 2.6H5.30344V1.8h3.39844v1.3Z" clip-rule="evenodd"></path>
                                        <path fill="#595959" d="M5.70117 6.80005H0v5.20005c0 .2761.223857.5.5.5h13c.2761 0 .5-.2239.5-.5V6.80005H8.30117v.80322c0 .27614-.22386.5-.5.5h-1.6c-.27614 0-.5-.22386-.5-.5v-.80322Z"></path></svg> &nbsp;Full-time</div>
                                      </div>
                                        <div class="metadata"><div class="attribute_snippet" data-testid="attribute_snippet_testid">
                                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 15" role="presentation" aria-hidden="true" aria-label="Shift" height="15px">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5C10.866 14.5 14 11.366 14 7.5C14 3.63401 10.866 0.5 7 0.5C3.13401 0.5 0 3.63401 0 7.5C0 11.366 3.13401 14.5 7 14.5ZM6.2496 4.25C6.2496 4.11193 6.36153 4 6.4996 4H7.2996C7.43767 4 7.5496 4.11193 7.5496 4.25V7.62406L9.62708 8.82349C9.74665 8.89252 9.78762 9.04542 9.71858 9.16499L9.31858 9.85781C9.24955 9.97739 9.09665 10.0184 8.97708 9.94932L6.25028 8.375H6.2496V8.37461L6.24805 8.37371L6.2496 8.37102V4.25Z" fill="#595959"></path>
                                          </svg> &nbsp;Part-Time</div>
                                          <a href="https://asterisc.in/" class="btn btn-light "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
  <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
</svg>&nbsp;Apply</a>
                                        </div>
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

