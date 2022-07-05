<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>DevFolio Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.1/css/mdb.min.css" rel="stylesheet">



  <!-- =======================================================
    Theme Name: DevFolio
    Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->

  <style>



.error
 {
  color: #FF0000;
}


</style>
</head>

<body id="page-top"> 

<?php
// define variables and set to empty values
$nameErr = $phoneErr= $phoneErr =  $vehicleNoErr= $fileErr = $addressErr= $cardErr= $pincodeErr = "" ;
$name = $phone=$phone =  $address = $vehicleNo= $file=  $card= $pincode = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }



// if (empty($_POST['phone'])) {//if no name has been supplied 
//         $phoneErr = 'Please Enter a Mobile Number '; //add to array "error"
//     } 
//     else if( !preg_match("/^[0-9]{10}*$/", $phone) ) 
//     {

//         $phoneErr = 'Your Mobile No is invalid  ';
        
//          }

//      else {

//          $phone = test_input($_POST["phone"]);
//           } 
    



  // if (empty($_POST["Number"])) {
  //   $numberErr = "Number is required";
  // } else {
  //   $Number = test_input($_POST["Number"]);
  //   // check if name only contains letters and whitespace
  //   if (!preg_match("/^[1-9][0-9]{10}*$/",$Number)) {
  //     $numberErr = "Only numbers are allowed";
      
  //   }
  // }


  
  if (empty($_POST["phone"])) {
    $phoneErr = "phone is required";
  } else {
    $phone = test_input($_POST["phone"]);
    // check if phone is well-formed
     if (!preg_match("/^[1-9][0-9]{9}$/",$phone)) {
      $phoneErr = "Invalid phone format";
    }
  }
    
  if (empty($_POST["pincode"])) {
    $pincodeErr = "Pincode is required";
  } else {
    $pincode = test_input($_POST["pincode"]);
    // check if pin is valid
    if (!preg_match("/^[1-9][0-9]{5}$/",$pincode)) {
      $pincodeErr = "Invalid pincode";
    }
  }


   if (empty($_POST["vehicleNo"])) {
    $vehicleNoErr = "vehicleNo is required";
  } else {
    $vehicleNo = test_input($_POST["vehicleNo"]);
    // check if pin is valid
    if (!preg_match("/^[A-Z]{2}[0-9]{2}[A-Z]{2}[0-9]{4}$/",$vehicleNo)) {
      $vehicleNoErr = "Invalid vehicleNo";
    }
  }

  if (empty($_POST["address"])) {
    $addressErr = "Address is required";
  } else {
    $address = test_input($_POST["address"]);
  }

if (empty($_POST["file"])) {
    $fileErr = "Please select a file";
  } else {
    $file = test_input($_POST["file"]);
  }

  if (empty($_POST["card"])) {
    $cardErr = "Please scan your card";
  } else {
    $card = test_input($_POST["card"]);
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
<!-- <div class="overlay-mf"></div>    -->
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
         <div class="contact-mf">
  <div id="contact" class="box-shadow-full"> 
              <div class="row">
                <div class="col-md-12">
                  <div class="title-box-2">
                    <h5 class="title-left">
                     DRIVER DETAILS
                    </h5>
                  </div>
                  <div>
                     
                      <div class="row">
                        <div class="col-lg-2">
                          </div>
                        <div class="col-lg-8">
                          <div class="form-group">
<p><span class="error">* required field</span></p>

<div class="md-form">
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   <i class="fa fa-address-card prefix"></i>
 <input type="text" name="card" id="materialLoginFormScanCard" placeholder=" Scan Card:" value="<?php echo $card;?>">
   <span class="error">*<?php echo $cardErr;?></span>
<label class="materialLoginFormScanCard"></label>
</div>


 
  <div class="md-form">
     <i class="fa fa-user prefix"></i>
<input type="text" name="name" id ="materialLoginFormName"  placeholder="  Name:" >
  <span class="error">* <?php echo $nameErr;?></span>
  <label for="materialLoginFormName"></label> 
</div>

  
 
   
  


  <button type="submit" class="button button-a button-big button-rouded" name="submit" value="Submit"> VIEW</button> 
 <button type="submit" class="button button-a button-big button-rouded" name="submit" value="Submit"> UPDATE</button> 
  <button type="submit" class="button button-a button-big button-rouded" name="submit" value="Submit"> DELETE</button> 
   <button type="submit" class="button button-a button-big button-rouded" name="submit" value="Submit"> SEARCH</button> 
  
</form>


                      </div>
                      
                  
                  </div>


                </div>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
  </section>
  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
