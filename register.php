<?php 
include('connect.php');
 ?>
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from theme-vessel-templates.theme-vessel.ey.r.appspot.com/logdy/main/register-18.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Nov 2020 00:38:02 GMT -->
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W24T6W7');</script>
    <!-- End Google Tag Manager -->
    <title>BeUnique Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="assets/assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/assets/fonts/flaticon/font/flaticon.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/6.png" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets/assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets/assets/css/skins/default.css">

</head>
<body id="top">
    <?php 
if(isset($_POST['full_name'])&&isset($_POST['phone_number'])&&isset($_POST['email'])&&isset($_POST['session'])&&isset($_POST['lesson'])){
$full_name = $_POST['full_name'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$session = $_POST['session'];
$lesson = $_POST['lesson'];
if(!empty($_POST['full_name'])&&!empty($_POST['phone_number'])&&!empty($_POST['email'])&&!empty($_POST['session'])&&!empty($_POST['lesson'])){
$query = "INSERT INTO students(full_name,phone_number,email,session,lesson) VALUES('$full_name','$phone_number','$email','$session','$lesson')";
if(mysqli_query($con,$query)){
   $last_id = mysqli_insert_id($con);
    $pp = "BU/".$lesson."/".$session."/00".$last_id;
    echo "<script>alert('You have successfully registered and your matriculation number is: $pp');</script>";
    echo "<script>window.location.href='index.php'</script>";
}
}
}
 ?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W24T6W7"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

<!-- Login 18 start -->
<div class="login-18">
    <div class="container">
        <div class="col-md-12 pad-0">
            <div class="row login-box-9">
                <div class="col-lg-6 col-sm-12 col-pad-0 align-self-center">
                    <div class="login-inner-form">
                        <div class="details">
                            <h3>Create an account</h3>
                            <form action="paymentForm.php" method="POST">
                                <div class="form-group">
                                    <input type="text" name="last_name" class="input-text" placeholder="Last Name" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="first_name" class="input-text" placeholder="First Name" required="">
                                </div>
                                <div class="form-group">
                                    <input type="phone_number" name="phone_number" class="input-text" placeholder="Phone Number" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="input-text" placeholder="Email Address" required="">
                                </div>
                                <div class="form-group">
                                    <select class="input-text" name="session" required="">
                                        <option>Please Choose a Session</option>
                                        <option value="01">Morning</option>
                                        <option value="02">Afternoon</option>
                                        <option value="03">Weekend</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="input-text" name="lesson" required="">
                                        <option>Please Choose a Lesson</option>
                                        <option value="45000">Full Stack Web Development - &#8358;45,000</option>
                                        <option value="25000">Graphic Design - &#8358;25,000</option>
                                        <option value="40000">Digital Marketing - &#8358;40,000</option>
                                    </select>
                                </div>
                                <!-- <div class="form-group">
                                    <input type="password" name="Password" class="input-text" placeholder="Password">
                                </div> -->
                               <!--  <div class="checkbox clearfix">
                                    <div class="form-check checkbox-theme">
                                        <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">
                                            I agree to the<a href="#" class="terms">terms of service</a>
                                        </label>
                                    </div>
                                </div> -->
                                <div class="form-group">
                                    <button type="submit" name="payment" class="btn-md btn-theme btn-block">Register</button>
                                </div>
                            </form>
                            <!-- <p>Already a member? <a href="login-18.html">Login here</a></p> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-pad-0 bg-img align-self-center none-992">
                    <div class="align-self-center">
                        <a href="login-18.html">
                            <img src="assets/img/6.png" class="logo" alt="logo">
                        </a>
                        <h3>Welcome to BeUnique Academy</h3>
                        <div class="clearfix"></div>
                        <!-- <ul class="social-list">
                            <li><a href="#" class="facebook-color"><i class="fa fa-facebook facebook-i"></i><span>Facebook</span></a></li>
                            <li><a href="#" class="twitter-color"><i class="fa fa-twitter twitter-i"></i><span>Twitter</span></a></li>
                            <li><a href="#" class="google-color"><i class="fa fa-google google-i"></i><span>Google</span></a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login 18 end -->

<!-- External JS libraries -->
<script src="assets/assets/js/jquery-2.2.0.min.js"></script>
<script src="assets/assets/js/popper.min.js"></script>
<script src="assets/assets/js/bootstrap.min.js"></script>
<!-- Custom JS Script -->
</body>

<!-- Mirrored from theme-vessel-templates.theme-vessel.ey.r.appspot.com/logdy/main/register-18.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Nov 2020 00:38:07 GMT -->
</html>
