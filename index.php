
<?php require 'config.php'; 

session_start();
$Email = $_SESSION['email'];

if($Email==true){

}else{
  header("location:/student_dashboard/student_register/login.php");
}
?> 
<?php 

if(isset($Email)){

  $mb = $Email;

  $info = "SELECT student_id, full_name, gender, dob, email, branch, student_number, parent_number, course, c_name, batch_timing, photofile,referral_code,referral_point, city FROM student_admission WHERE email = '$mb'";

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
  $referral_code = $rt['referral_code'];
  $referral_point = $rt['referral_point'];


}
?>



<!DOCTYPE html>
<html lang="en">
<head>
<!-- ////////////////////////////////////////////// -->

<!-- for drop down -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- ////////////////////////////////////////// -->

<style>
        .popup-container {
            background-color: blue;
        }
    </style>
  <!--Desgin by : Chandrakant Sir-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Student Profile-Asterisc.in</title>
    <link rel="shortcut icon" href="css/logo.png"/>
    <meta name="author" content="Codeconvey" />
    
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css'>

    <link rel="stylesheet" href="css/demo.css" />
    <link rel="stylesheet" href="/student_dashboard/student_register/css/ad.css" />

	  <link rel="stylesheet" href="css/style.css">
    <style>
      section{
        margin-top : -8pc;
      }

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
.up{
  margin-top: -5pc;
}


      </style>



<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
 
<div class="student-profile py-4 ">
  <div class="container ">
    <a href="#" class="menu menu2 ">Home ></a>
    <span class="menu1 menu2">Dashboard</span>
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <img class="profile_img"  src="stuimg/<?php echo $dp ?>" alt="student dp">
            <h3><?php echo $fname ?></h3>
          </div>
          <div class="card-body"> <!--   PRN  (Permanent Registration Number) -->
          <p class="mb-0"><strong class="pr-1">PRN ID :</strong><?php echo $stdid ?></p>
          <p class="mb-0"><strong class="pr-1">Referral Code :</strong><?php echo $referral_code ?></p>
          <p class="mb-0"><strong class="pr-1">Referral Points :</strong><?php echo $referral_point?></p>
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
<!-- //////////////////////////////////////////////////////////////////////////////// -->

<table class="table table-bordered">
    <tr style="background-color: #e9e8e8;">
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
                    <i class="fa fa-credit-card-alt" style="color: black;"></i>  FEES PAYMENT
                       </a>
                    <!-- Add more options here -->

                </div>

                <div x-show="isOpen" class="absolute mt-2 py-2 w-48 bg-white border rounded-lg shadow-lg">
                   <a href="payment_details?email=<?php echo $mb ?>" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                    <i class="fa fa-inr" style="color: black;"></i> FEES DETAILS
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


<tr x-data="{ isOpen: false }" @click.away="isOpen = false" @keydown.escape="isOpen = false" style="background-color: #fff;">
        <td>
            <div x-on:click="isOpen = !isOpen" class="relative">
            <i class="fa fa-toggle-down"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a style="color: #007bff;" class="cursor-pointer">OTHERS</a>
                <div x-show="isOpen" class="absolute mt-2 py-2 w-48 bg-white border rounded-lg shadow-lg">
                   <a href="institute_detail.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                    <i class="fa fa-user-circle" style="color: black;"></i> INSTITUTE DETAILS
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
<!-- ////////////////////////////////////////////////////////////////////// -->
   <!-- <table class="table table-bordered">

          
    <tr  style="background-color: #e9e8e8;">
        <td>
            <i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">HOME</a>
        </td>
    </tr>
    
    <tr  style="background-color: #FFF;">
        <td>
            &nbsp;<i class="fa fa-credit-card-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="payment?email=<?php echo $mb ?>">FEES PAYMENT</a>
        </td>
    </tr>
    <tr>
        <td>
            &nbsp;<i class="fa fa-inr"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="payment_details?email=<?php echo $mb ?>">FEES DETAILS</a>
        </td>
    </tr>
    <tr style="background-color: #FFF;">
        <td>
            <i class="fa fa-cog"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="edit_profile?email=<?php echo $mb ?>">EDIT PROFILE</a>
        </td>
    </tr>
    <tr>
        <td>
            <i class="fa fa-briefcase"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="internship?email=<?php echo $mb ?>">INTERNSHIP</a>
        </td>
    </tr>
    <tr style="background-color: #FFF;">
        <td>
            <i class="fa fa-phone-square"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="job_call">JOB CALLS</a>
        </td>
    </tr>
    <tr style="background-color: #FFF;">
        <td>
            <i class="fa fa-bell"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="notification.php">NOTIFICATION</a>
        </td>
    </tr>
    <tr style="background-color: #FFF;">
        <td>
            <i class="fa fa-bell"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="personalnotification.php">PERSONAL NOTIFICATION</a>
        </td>
    </tr>
    <tr style="background-color: #FFF;">
        <td>
            <i class="fa fa-user-circle"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="institute_detail.php">INSTITUTE DETAILS</a>
        </td>
    </tr>
    <tr style="background-color: #FFF;">
        <td>
            <i class="fa fa-download"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="downlode.php">DOWNLOAD</a>
        </td>
    </tr>
    <tr style="background-color: #FFF;">
        <td>
            <i class="fa fa-commenting"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="complaintBox.php">COMPLAINT BOX</a>
        </td>
    </tr>
    <tr style="background-color: #FFF;">
        <td>
            <i class="fa fa-user-plus"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="enrollmentForm.php">ENROLLMENT FORM</a>
        </td>
    </tr>
    <tr style="background-color: #FFF;">
        <td>
            <i class="fa fa-video-camera"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="videoTotorial.php">VIDEO TUTORIAL</a>
        </td>
    </tr>
    <tr style="background-color: #FFF;">
        <td>
            <i class="fa fa-id-badge"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="StudentID.php">STUDENT ID CARD</a>
        </td>
    </tr>
   
    <tr style="background-color: #FFF;">
        <td>
            <i class="fa fa-file"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="studyMaterial.php">STUDY MATERIAL</a>
        </td>
    </tr>
    <tr style="background-color: #FFF;">
        <td>
            <i class="fa fa-briefcase"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="AsteriscInternship.php">ASTERISK INTERNSHIP</a>
        </td>
    </tr>

    <tr style="background-color: #FFF;">
        <td>
            <i class="fa fa-asterisk"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="rules?email=<?php echo $mb ?>">RULES AND REGULATIONS</a>
        </td>
    </tr>

    
    <tr>
        <td>
            <i class="fa fa-power-off"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout">LOGOUT</a>
        </td>
    </tr>
</table> -->





          </div>
        </div>
        <div style="height: 26px"></div>
      </div>
      
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%">Full Name</th>
                <td width="2%">:</td>
                <td><?php echo $fname; ?></td>
              </tr>
               <tr>
                <th width="30%">Branch Name</th>
                <td width="2%">:</td>
                <td><?php echo $branch; ?></td>
              </tr>
              <tr>
                <th width="30%">College Name</th>
                <td width="2%">:</td>
                <td><?php echo $clgname; ?></td>
              </tr>
              <tr>
                <th width="30%">Gender</th>
                <td width="2%">:</td>
                <td><?php echo $gender; ?></td>
              </tr>
              <tr>
                <th width="30%">Mobile</th>
                <td width="2%">:</td>
                <td><?php echo $stuph; ?></td>
              </tr>
              <tr>
                <th width="30%">Email</th>
                <td width="2%">:</td>
                <td><?php echo $email; ?></td>
              </tr>
            </table>
          </div>
        </div>

<br>

<!-- /////////////////////////////////////////////////////////////////////////////////// -->

        <div class="card shadow-sm">
                                        <div class="card-header bg-transparent border-0">
                                            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>NEW ENROLLMENT </h3>
                                            <br>
<br>
<br>
<br>
<br>
<br>

                                            <section>

                                                <div class="main-panel">

                                                    <div class="col-12 grid-margin stretch-card">
                                                        <div class="card">
                                                            <div class="card-body">


                                                            <form class="forms-sample" action="insertEnrollment.php" method="post" enctype="multipart/form-data">
                                                                <!-- <input type="text" maxlength="32" name="first_name" pattern="[A-Za-z]" value="'.$_SESSION['user_first_name'].'" required>' -->
                                                                <div class="col-md-12">
											
                                                                <div class="form-group">
                                                                        <label  class="label" for="exampleInputName1">Full Name</label>
                                                                        <input  type="text" id="fullname"  name="full_name" value= "<?php echo $fname ?>" class="form__input form-control" required="required" >
                                                                        <div class="mb-2 text-danger form__input-error-message"></div></div>

                                                                        
                                                                        <input  type="hidden" id="fullname"  name="gender"  value= "<?php echo $gender ?>" class="form__input form-control" required="required" >

                                                                        <input  type="hidden" id="fullname"  name="dob" value= "<?php echo $dob ?>" class="form__input form-control" required="required" >

                                                                    <div class="form-group">
                                                                        <label for="exampleInputName1">Student Email</label>
                                                                        <input type="text" name="stuemail"  value="<?php echo $email ?>" class="form-control" required="true" readonly>
                                                                    </div></div>
                                                                    <div class="col-md-12">
                                                                    
                                                                        <input  id="telnam1"  type="hidden" name="student_number"   value="<?php echo  $stuph	 ?>" class="form__input form-control" required>
                                                                        
                                                                   

    
                                                                        <input id="telnam1" type="hidden" name="parnum"  value="<?php echo  $parph ?>"class="form__input form-control"  required="true">
                                                                       

                                                                       
                                                                        <input id="telnam1" type="hidden" name="address"  value="<?php echo  $add ?>"class="form__input form-control"  required="true">
                                               

                                                                               <input id="fullname"  type="hidden" name="stucity" value="<?php echo $city ?>" class="form__input form-control" required="true">
                                          

                                                                        
                                                                        
                                                                        <input id="fullname"  type="hidden" name="pin_code" value="<?php echo $pincode ?>" class="form__input form-control" required="true">
                                                 

                                                                        
                                                                        <input id="fullname"  type="hidden" name="work" value="<?php echo $work ?>" class="form__input form-control" required="true">
                                                                        
                                                                  
                                                                     
                                                                        <input id="fullname" type="hidden" name="clgname" value="<?php echo $clgname ?>" class="form__input form-control" required="true">
                                                                        
                                                                   
                                                                     
                                                                        <input id="fullname"  type="hidden" name="e_number" value="<?php echo $e_no ?>" class="form__input form-control" required="true">
                                                                    

                                                                        
                                                                        <input id="fullname"  type="hidden" name="branch" value="<?php echo $branch ?>" class="form__input form-control" required="true">
                                                                        

                                                                        <div class="form-group">
                                                                          <label class="label" for="exampleInputName1">Course</label>
                                                                                 <select id="course" name="course" class="form__input form-control" required="true">
        <option value="">Select a course</option>
        <option value="full stack developer">full stack developer</option>
        <option value="c language">c language</option>
        <option value="C++ language">C++ language</option>
        <option value="html">html</option>
        <option value="css">css</option>
        <option value="python">python</option>
        <!-- Add more options as needed -->
    </select>
    <div class="mb-2 text-danger form__input-error-message"></div>
</div>

                                                                        
                                                                        

                                                                        
                                                                        <input id="fullname"  type="hidden" name="batch_timing" value="<?php echo $batchtm ?>" class="form__input form-control" required="true">
                 

                                                                        
                                                                        <input id="fullname"  type="hidden" name="tutor_name" value="<?php echo $tutorname ?>" class="form__input form-control" required="true">
                               

                                                                        
                                                                        <input id="fullname"  type="hidden" name="photofile" value="<?php echo $dp ?>" class="form__input form-control" required="true">
                                                                       

               
                                                                        <input id="fullname"  type="hidden" name="docfile" value="<?php echo $docfile ?>" class="form__input form-control" required="true">
                               

                                                                        
                                                                        <input id="fullname"  type="hidden" name="total_fees" value="<?php echo $tfees ?>" class="form__input form-control" required="true">
                     

                                                                       
                                                                        <input id="fullname"  type="hidden" name="paid_fees" value="<?php echo $pfees ?>" class="form__input form-control" required="true">
                        

                                                                        
                                                                        <input id="fullname"  type="hidden" name="payment_type" value="<?php echo $ptype ?>" class="form__input form-control" required="true">
               

                                                                       
                                                                        <input id="fullname"  type="hidden" name="cheque_no" value="<?php echo $chqno ?>" class="form__input form-control" required="true">
                       

                                                                        
                                                                        <input id="fullname"  type="hidden" name="admission_date" value="<?php echo $adddate ?>" class="form__input form-control" required="true">
                   

                                                                        
                                                                        <input id="fullname"  type="hidden" name="receipt_number" value="<?php echo $receiptno ?>" class="form__input form-control" required="true">
                      

                                                                        
                                                                        <input id="fullname"  type="hidden" name="Password" value="<?php echo $pass ?>" class="form__input form-control">
                                                                       
                                                                   
                                                                   
                                                                    <!-- <div class="form-group">
                                                                        <a href="editimage.php"  value="" class="btn btn-outline-secondary mr-2" name="Update"></a>
                                                                    </div> -->


                                                                    <input type="submit" value="Enroll" class="btn-primary">


                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <!-- content-wrapper ends -->

                                    </div>






























        
          <div style="height: 26px"></div>
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="fa fa-download "></i> Download Certificates</h3>
          </div>




































          <div class="card-body pt-0" style ="overflow:auto">







            <table class="table table-bordered">
              <tr class="ctb">
                <th style="color: white;">Sr. No.</th>
                <th style="color: white;">Course</th>
                <th style="color: white;">Date</th>
                <th style="color: white;">Remark</th>
                <th style="color: white;">Certificate</th>
              </tr>
              
    <?php
			
			$i = 1;
			$rows = mysqli_query($con, "SELECT * FROM certificatetb where email='".$mb."'");
		
			foreach($rows as $row) :
			?>
              <tr>
                  
                  

                    <td><?php echo $i++ ?></td>
                    <td><?php echo $row['course'] ?></td>
                    <td><?php echo $row['date'] ?></td>
                    <td><?php echo $row['remark'] ?></td> 

                    <?php 
                    $remark= $row['remark'] ;
                    if($remark=='Pending'){
                      echo "<td>-</td>";
         
                    }
                    else if($remark=='Complete'){
                       echo "<td><a href= '".$row['cer']."' target='_blank' >Download</a></td>";
                      }
                    
                    ?>
                    

			
              </tr>
              
              	<?php endforeach; ?>



                <div class="popup-overlay ">
                <div class="popup-container" style="background-color: #c595c6;">
            <div class="left">
                <img  class="hero-image"  src="\student_dashboard\student_register\images\bg.jpg" width="230" height="299" />
            </div>
            <div class="right">
                <div class="skip-button">
                    Skip
                </div>
                <p class="logo" >Live Blogger</p>
                <h2 class="popup-heading"  > Design Course</h2>
                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo qui, minima neque ipsa laborum corporis. Fugiat explicabo, porro dolorem .</p>
                <a href="#" class="visit-button"> Visit Site</a>
            </div>
        </div>
    </div>
    <script src="/student_dashboard/student_register/js/ad.js"></script>









             
            </table>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
           
    		</div>
		</div>
    </div>
</section>
     


    <!-- Analytics -->

	</body>
</html>

