<?php 
include('connect.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PHP SDK Implementation </title>
    <style>
       #btn-of-destiny{
           margin-top:2em;
       }

       #explain1{
           padding:10px;
           margin:2em;
       }

    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
    <body>











        <form method="POST" action="processPayment.php" id="paymentForm">
            <?php 
if(isset($_POST['last_name'])&&isset($_POST['first_name'])&&isset($_POST['phone_number'])&&isset($_POST['email'])&&isset($_POST['session'])&&isset($_POST['lesson'])){
$last_name = $_POST['last_name'];
$first_name = $_POST['first_name'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$session = $_POST['session'];
$lesson = $_POST['lesson'];

$query = "INSERT INTO students(last_name,first_name,phone_number,email,session,lesson) VALUES('$last_name','$first_name','$phone_number','$email','$session','$lesson')";
mysqli_query($con,$query);



}
 ?>
            <input type="hidden" name="amount" value="<?php echo $lesson; ?>" /> <!-- Replace the value with your transaction amount -->
            <input type="hidden" name="payment_options" value="" /> <!-- Can be card, account, ussd, qr, mpesa, mobilemoneyghana  (optional) -->
            <input type="hidden" name="description" value="BeUnique Academy Training Course" /> <!-- Replace the value with your transaction description -->
            <input type="hidden" name="logo" value="http://localhost/beunique/assets/img/6.png" /> <!-- Replace the value with your logo url (optional) -->
            <input type="hidden" name="title" value="BeUnique Academy Training Course" /> <!-- Replace the value with your transaction title (optional) -->
            <input type="hidden" name="country" value="NG" /> <!-- Replace the value with your transaction country -->
            <input type="hidden" name="currency" value="NGN" /> <!-- Replace the value with your transaction currency -->
            <input type="hidden" name="email" value="<?php echo $email; ?>" /> <!-- Replace the value with your customer email -->
            <input type="hidden" name="firstname" value="<?php echo $first_name; ?>" /> <!-- Replace the value with your customer firstname (optional) -->
            <input type="hidden" name="session" value="<?php echo $session; ?>" />
            <input type="hidden" name="lastname"value="<?php echo $last_name; ?>" /> <!-- Replace the value with your customer lastname (optional) -->
            <input type="hidden" name="phonenumber" value="<?php echo $phone_number; ?>" /> <!-- Replace the value with your customer phonenumber (optional if email is passes) -->
            <input type="hidden" name="pay_button_text" value="Complete Payment" /> <!-- Replace the value with the payment button text you prefer (optional) -->
            
            <input type="hidden" name="successurl" value="https://beuniqueacademy.com/thankyou.php"> <!-- Put your success url here -->
            <input type="hidden" name="failureurl" value="https://beuniqueacademy.com/fail.php"> <!-- Put your failure url here -->
            <center><input name="pay" id="btn-of-destiny" class="btn btn-warning" type="submit" value="Pay Now" /></center>
        </form>















       <!--you can delete this if you no longer need the guide--->
        <div id="explain1" class="container-lg bg-dark " style="color:white; text-align:center">
            <p>Your Form Should Contain Hidden Values</p>

            <p>To view the hidden values <code>Inspect the Page </code>or Hold <code>Ctrl</code> + <code>Shift</code> + <code> I</code></p>
        </div>



        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>