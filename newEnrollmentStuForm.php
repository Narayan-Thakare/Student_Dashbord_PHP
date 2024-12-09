<?php require 'config.php';


session_start();
$Email = $_SESSION['email'];

if($Email==true){

}else{
  header("location:/student_dashboard/student_register/login.php");
}


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
                        <span class="menu1 menu2">  enrollment</span>
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
                    <tr>
                      <td>&nbsp;<i class="fa fa-inr"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="payment?email=<?php echo $mb ?>">FEES PAYMENT</a></td>
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
                  <div class="card shadow-sm">
                    <div class="card-header bg-transparent border-0">
                      <h3 class="mb-0"><i class="far fa-clone pr-1"></i>ENROLLMENT FORM</h3>
                      <br>

                      <form action="insertEnrollment.php" id="EmploymentApplication100" method="post" >
  
  <table >
    <tr>
      <td style="width: 50%">
        <label for="full_name"><b>Full Name *</b></label><br />
        <input name="full_name" type="text" value="<?php echo $full_name; ?>" maxlength="50" style="width:100%;max-width: 260px" required />
      </td>
      <td>
        <label for="gender"><b>Gender *</b></label><br />
        <input name="gender" type="text" value="<?php echo $gender; ?>" maxlength="10" style="width:100%;max-width: 260px" required />
      </td>
    </tr>
    <tr>
      <td>
        <label for="dob"><b>Date of Birth *</b></label><br />
        <input name="dob" type="text" value="<?php echo $dob; ?>" maxlength="10" style="width:100%;max-width: 260px" required />
      </td>
      <td>
        <label for="email"><b>Email *</b></label><br />
        <input name="email" type="email" value="<?php echo $email; ?>" maxlength="100" style="width:100%;max-width: 535px" required />
      </td>
    </tr>
    <tr>
      <td>
        <label for="student_number"><b>Student Phone Number *</b></label><br />
        <input name="student_number" type="text" value="<?php echo $student_number; ?>" maxlength="15" style="width:100%;max-width: 260px" required />
      </td>
      <td>
        <label for="parent_number"><b>Parent's Phone Number *</b></label><br />
        <input name="parent_number" type="text" value="<?php echo $parent_number; ?>" maxlength="15" style="width:100%;max-width: 260px" required />
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <label for="address"><b>Address *</b></label><br />
        <input name="address" type="text" value="<?php echo $address; ?>" maxlength="255" style="width:100%;max-width: 535px" required />
      </td>
    </tr>
    <tr>
      <td>
        <label for="city"><b>City *</b></label><br />
        <input name="city" type="text" value="<?php echo $city; ?>" maxlength="100" style="width:100%;max-width: 260px" required />
      </td>
      <td>
        <label for="pin_code"><b>Pin Code *</b></label><br />
        <input name="pin_code" type="text" value="<?php echo $pin_code; ?>" maxlength="10" style="width:100%;max-width: 260px" required />
      </td>
    </tr>
    <tr>
      <td>
        <label for="work"><b>Work *</b></label><br />
        <input name="work" type="text" value="<?php echo $work; ?>" maxlength="100" style="width:100%;max-width: 260px" required />
      </td>
      <td>
        <label for="c_name"><b>College Name *</b></label><br />
        <input name="c_name" type="text" value="<?php echo $c_name; ?>" maxlength="100" style="width:100%;max-width: 260px" required />
      </td>
    </tr>
    <tr>
      <td>
        <label for="e_number"><b>Enrollment Number *</b></label><br />
        <input name="e_number" type="text" value="<?php echo $e_number; ?>" maxlength="20" style="width:100%;max-width: 260px" required />
      </td>
      <td>
        <label for="branch"><b>Branch *</b></label><br />
        <input name="branch" type="text" value="<?php echo $branch; ?>" maxlength="50" style="width:100%;max-width: 260px" required />
      </td>
    </tr>
    <tr>
      <td>
        <label for="course"><b>Course *</b></label><br />
        <select name="course" style="width:100%;max-width: 260px" required>
          <option value="JAVA" <?php if ($course === 'JAVA') echo 'selected'; ?>>JAVA</option>
          <option value="HTML" <?php if ($course === 'HTML') echo 'selected'; ?>>HTML</option>
          <option value="CSS" <?php if ($course === 'CSS') echo 'selected'; ?>>CSS</option>
          <!-- Add more options as needed -->
        </select>
      </td>
      <td>
        <label for="batch_timing"><b>Batch Timing *</b></label><br />
        <input name="batch_timing" type="text" value="<?php echo $batch_timing; ?>" maxlength="50" style="width:100%;max-width: 260px" required />
      </td>
    </tr>
    <tr>
      <td>
        <label for="tutor_name"><b>Tutor Name *</b></label><br />
        <input name="tutor_name" type="text" value="<?php echo $tutor_name; ?>" maxlength="100" style="width:100%;max-width: 260px" required />
      </td>
      <td>
        <label for="photofile"><b>Photo File *</b></label><br />
        <input name="photofile" type="file" accept="image/*" required />
      </td>
    </tr>
    <tr>
      <td>
        <label for="docfile"><b>Document File</b></label><br />
        <input name="docfile" type="file" accept=".pdf,.doc,.docx" />
      </td>
      <td>
        <label for="total_fees"><b>Total Fees *</b></label><br />
        <input name="total_fees" type="text" value="<?php echo $total_fees; ?>" maxlength="15" style="width:100%;max-width: 260px" required />
      </td>
    </tr>
    <tr>
      <td>
        <label for="paid_fees"><b>Paid Fees</b></label><br />
        <input name="paid_fees" type="text" value="<?php echo $paid_fees; ?>" maxlength="15" style="width:100%;max-width: 260px" />
      </td>
      <td>
        <label for="payment_type"><b>Payment Type *</b></label><br />
        <input name="payment_type" type="text" value="<?php echo $payment_type; ?>" maxlength="50" style="width:100%;max-width: 260px" required />
      </td>
    </tr>
    <tr>
      <td>
        <label for="cheque_no"><b>Cheque Number</b></label><br />
        <input name="cheque_no" type="text" value="<?php echo $cheque_no; ?>" maxlength="50" style="width:100%;max-width: 260px" />
      </td>
      <td>
        <label for="admission_date"><b>Admission Date *</b></label><br />
        <input name="admission_date" type="date" value="<?php echo $admission_date; ?>" style="width:100%;max-width: 260px" required />
      </td>
    </tr>
    <tr>
      <td>
        <label for="receipt_number"><b>Receipt Number *</b></label><br />
        <input name="receipt_number" type="text" value="<?php echo $receipt_number; ?>" maxlength="50" style="width:100%;max-width: 260px" required />
      </td>
      <!-- <td>
        <label for="Password"><b>Password</b></label><br />
        <input name="Password" type="password" value="<?php echo $password; ?>" maxlength="50" style="width:100%;max-width: 260px" required />
      </td> -->
    </tr>
    <tr>
      <td colspan="2" style="text-align: center;">
        <input name="submit" type="submit" value="Submit" />
      </td>
    </tr>
  </table>
</form>

                    </div>

                    <!-- partial -->

                  </div>
                </div>
              </div>
  </section>



  <!-- Analytics -->

</body>

</html>