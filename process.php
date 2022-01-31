<?php 
include('connect.php');
	function generate_random_string($length) {
    $characters = '23456789abcdefghjkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

if(!empty($_POST['payment'])&&!empty($_POST['full_name'])&&!empty($_POST['phone_number'])&&!empty($_POST['email'])&&!empty($_POST['session'])&&!empty($_POST['lesson'])){
$full_name = $_POST['full_name'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$session = $_POST['session'];
$lesson = $_POST['lesson'];
$curl = curl_init();

$customer_email = $email;
$amount = $lesson;  
$currency = "NGN";
$txref = generate_random_string(20);


$query = "INSERT INTO students(full_name,phone_number,email,session,lesson,txref) VALUES('$full_name','$phone_number','$email','$session','$lesson', '$txref')";
mysqli_query($con,$query);

// $_SESSION["full_name"] = $full_name;
// $_SESSION["phone_number"] = $phone_number;
// $_SESSION["email"] = $email;
// $_SESSION["session"] = $session;


 // ensure you generate unique references per transaction.


$PBFPubKey = "FLWPUBK_TEST-ea752c99493d4be8acf3d4125531e6e0-X"; // get your public key from the dashboard.
$redirect_url = "http://localhost/beunique/success.php";



curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.ravepay.co/flwv3-pug/getpaidx/api/v2/hosted/pay",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode([
    'amount'=>$amount,
    'customer_email'=>$customer_email,
    'currency'=>$currency,
    'txref'=>$txref,
    'PBFPubKey'=>$PBFPubKey,
    'redirect_url'=>$redirect_url
  ]),
  CURLOPT_HTTPHEADER => [
    "content-type: application/json",
    "cache-control: no-cache"
  ],
));

$response = curl_exec($curl);
$err = curl_error($curl);

if($err){
  // there was an error contacting the rave API
  die('Curl returned error: ' . $err);
}

$transaction = json_decode($response);

if(!$transaction->data && !$transaction->data->link){
  // there was an error from the API
  print_r('API returned error: ' . $transaction->message);
}


   // $last_id = mysqli_insert_id($con);
    // $pp = "BU/".$lesson."/".$session."/00".$last_id;
    // echo "<script>alert('You have successfully registered and your matriculation number is: $pp');</script>";
    // echo "<script>window.location.href='index.php'</script>";



// redirect to page so User can pay
// uncomment this line to allow the user redirect to the payment page
header('Location: ' . $transaction->data->link);


}
 ?>

 