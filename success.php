<?php
session_start();
include('connect.php');
// $full_name = $_SESSION["full_name"];
// $email = $_SESSION["email"];
// $phone_number = $_SESSION["phone_number"];
// $session = $_SESSION["session"];

    if (isset($_GET['txref'])) {
        $ref = $_GET['txref'];
        $query = "SELECT * FROM students WHERE txref = '$ref'";
$result = mysqli_query($con,$query);
$row = $result->fetch_assoc();
$session = $row["session"];
$id = $row["id"];
     $amount = $row["lesson"];


        $amount = $amount; //Correct Amount from Server
        $currency = "NGN"; //Correct Currency from Server

        $query = array(
            "SECKEY" => "FLWSECK_TEST-ac02c4d77a4cd66ce46518fa28a9f297-X",
            "txref" => $ref
        );

        $data_string = json_encode($query);
                
        $ch = curl_init('https://api.ravepay.co/flwv3-pug/getpaidx/api/v2/verify');                                                                      
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                              
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

        $response = curl_exec($ch);

        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $header = substr($response, 0, $header_size);
        $body = substr($response, $header_size);

        curl_close($ch);

        $resp = json_decode($response, true);

        $paymentStatus = $resp['data']['status'];
        $chargeResponsecode = $resp['data']['chargecode'];
        $chargeAmount = $resp['data']['amount'];
        $chargeCurrency = $resp['data']['currency'];

        if (($chargeResponsecode == "00" || $chargeResponsecode == "0") && ($chargeAmount == $amount)  && ($chargeCurrency == $currency)) {
            $status = "1";
            $quer = "UPDATE students SET status = '$status' WHERE txref = '$ref'";
mysqli_query($con,$quer);
            if($amount == "45000"){
    $pp = "WB";
}elseif ($amount == "40000") {
    $pp = "DM";
}elseif ($amount == "25000") {
    $pp = "GRA";
}
            $answer = "BU/".$pp."/".$session."/".$id;
            $_SESSION['answer'] = $answer;
           // echo "<script>alert('Your registration was successful and your MATRICULATION NUMBER IS:$answer');</script>";
echo "<script>window.location.href='thankyou.php'</script>";
        } else {
            echo "<script>alert('We did not receive your payment');</script>";
echo "<script>window.location.href='index.php'</script>";
        }
    }
        else {
      die('No reference supplied');
    }

?>