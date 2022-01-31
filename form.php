<!DOCTYPE html>
<html lang="en">

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="keywords" content="">
<title>Unikexpress | Award Throphy Printing</title>
<link href="file:///C|/wamp/www/unikexpress.com/custom/img/apple-touch-icon.png" type="image/x-icon" rel="shortcut icon" />
<link href="file:///C|/wamp/www/unikexpress.com/custom/printivo.s3.amazonaws.com/img/apple-touch-icon-145-x-145.png" rel="apple-touch-icon">
<link href="file:///C|/wamp/www/unikexpress.com/custom/printivo.s3.amazonaws.com/img/apple-touch-icon-58-x-58.png" rel="apple-touch-icon" sizes="58x58">
<link href="file:///C|/wamp/www/unikexpress.com/custom/printivo.s3.amazonaws.com/img/apple-touch-icon-73-x-73.png" rel="apple-touch-icon" sizes="73x73">
<link href="file:///C|/wamp/www/unikexpress.com/custom/printivo.s3.amazonaws.com/img/apple-touch-icon-115-x-115.png" rel="apple-touch-icon" sizes="115x115">
<link href="file:///C|/wamp/www/unikexpress.com/custom/printivo.s3.amazonaws.com/img/apple-touch-icon-145-x-145.png" rel="apple-touch-icon" sizes="145x145">

<link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="file:///C|/wamp/www/unikexpress.com/custom/css/bootstrap.css" />
<link rel="stylesheet" href="file:///C|/wamp/www/unikexpress.com/custom/css/countrySelect.css" />
<link rel="stylesheet" href="file:///C|/wamp/www/unikexpress.com/custom/css/uploader.css" />
<link rel="stylesheet" href="file:///C|/wamp/www/unikexpress.com/custom/css/style.css" />
<link rel="stylesheet" href="file:///C|/wamp/www/unikexpress.com/custom/css/featherlight.min.css" />
<link rel="stylesheet" href="file:///C|/wamp/www/unikexpress.com/custom/css/tailwind.css" />
<link rel="stylesheet" href="file:///C|/wamp/www/unikexpress.com/custom/css/flaticon.css" />



</head>
<body>

<div class="w-full max-w-4xl mx-auto bg-grey-lighter">
<div class="content-container mx-auto">
<div class="h-12 w-full flex justify-center">
<div class="flex w-content">
<div class="flex w-full md:w-1/2 justify-end items-center text-sm">

<div class="text-xs flex flex-wrap">
<span>Need help? Call:&nbsp;</span>
<span>
<a href="tel:234.818.747.2197" class="text-tivo-magenta no-underline">+2348187472197</a>,&nbsp;
<a href="tel:234.806.649.5719" class="text-tivo-magenta no-underline">+2348066495719</a>
</span>
</div>
</div>
<div class="flex items-center md:hidden pl-2">
<a href="https://api.whatsapp.com/send?phone=2348187472197" target="_blank" rel="noopener">
<img src="file:///C|/wamp/www/unikexpress.com/custom/img/whatsapp-icon.png" style="max-width:28px" alt="contact us on +2348187472197" />
</a>
</div>
</div>
</div>
</div>
</div>

<div class="w-full max-w-4xl mx-auto">
<div class="content-container mx-auto">
<div class="h-24 w-full flex justify-center">
<div class="flex w-full pt-6 pb-6">
<div class="flex w-full items-center">
<a href="file:///C|/wamp/www/unikexpress.com">
<img src="file:///C|/wamp/www/unikexpress.com/custom/img/logo.png" /> </a>
</div>
</div>
</div>
</div>
</div>


</div>
</div>


<div class="w-full md:show bg-white z-20">


<style type="text/css">
    .form-group.required label:after {
        content: " *";
        color: red
    }

    .form-ctn label {
        display: inline-block !important;
    }
    .add-on {
        margin-right: 18px;
        font-size: 14px;
    }
    .modal {
        z-index: 99999999999999;
    }
    .term-heading {
        margin-left: 20px;
        font-size: 15px;
        color: #FF6501;
        font-weight: bolder;
    }

    .term-list {
        font-size: 14px;
        padding-left: 40px !important;
    }

    .link-disabled {
        opacity: 0.5;
    }

</style>
<div class="template-pages">
<div class="container">
<div class="row">
<div class="col-xs-12">
<h1 class="about-header bold-font" style="margin:auto auto 10px">
Upload your design </h1>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
<div class="form-ctn clearfix shopping-form product-details">
<?php
include("file:///C|/wamp/www/unikexpress.com/custom/db_conn.inc");
if(isset($_REQUEST['uin'])){
$sql = "SELECT * FROM images_info WHERE uin='$_REQUEST[uin]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
$row['uin']=$_REQUEST['uin'];
$ID = $_REQUEST['uin'];
}
?>

                            <?php
include("file:///C|/wamp/www/unikexpress.com/custom/db_conn.inc");

	error_reporting(E_ALL);
	if(isset($_REQUEST['submit'])){
		$printing=trim(addslashes($_REQUEST['printing']));
		$uin=trim(addslashes($_REQUEST['uin']));
		$fullname=trim(addslashes($_REQUEST['fullname']));
		$email=trim(addslashes($_REQUEST['email']));
		$phone=trim(addslashes($_REQUEST['phone']));
		$quantity=trim(addslashes($_REQUEST['quantity']));
		$range=trim(addslashes($_REQUEST['range']));
		$shape=trim(addslashes($_REQUEST['shape']));
		$shipping=trim(addslashes($_REQUEST['shipping']));
		$total_price=trim(addslashes($_REQUEST['total_price']));

/*Start Here - SMS API Integration */
$recipient=$phone;
$username = 'godsfire';
$password = 'godspjay1989';
$senderid = 'Unikexpress';
$m1 = 'Thanks';
$m2 = $fullname.", for patronizing us at Unikexpress. Our Team will contact you shortly! ";
$message= $m1." ".$m2;

$url = 'http://api.smartsmssolutions.com/smsapi.php';
function sendsms_get($username, $password, $message, $senderid, $recipient) {
$message = urlencode($message);
$senderid = urlencode($senderid);
$url =
'http://api.smartsmssolutions.com/smsapi.php?username='.$username.'&password='.$password.'&sender='.$senderid.'&recipient='.$recipient.'&message='.$message.'&';
$send = file_get_contents($url);
return $send;
}
$get_sms = sendsms_get($username, $password, $message, $senderid, $recipient);
echo $get_sms;
/*Ends Here - SMS API Integration */

include ('file:///C|/wamp/www/unikexpress.com/custom/order.php');

$sql="INSERT INTO unikexpress (printing, uin, fullname, phone, email, quantity, width, height, shipping, total_price) VALUES
('$printing','$uin','$fullname','$phone','$email','$quantity','$range','$shape','$shipping','$total_price')";

mysqli_query($conn,$sql) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}
echo "<script>alert('Dear - $fullname - now proceed to payment for your Printing')
	location.href='pay/pay.php?uin=".$_REQUEST['uin']."'</script>";
	}
	mysqli_close($conn);


?>
 <script type="text/javascript">

function sum()
{
var quantity = parseInt(document.getElementById("quantity").value);
var range = parseInt(document.getElementById("range").value);


if(quantity.value=="")
{
quantity.value = 0.00;
}
if(range.value=="")
{
range.value = 0.00;
}

var sum = (quantity*range).toFixed(2);
document.getElementById("total_price").value=sum;
}
</script>


<form method="post" accept-charset="utf-8" class="clearfix" id="design-form" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">


<div class="col-xs-12">
<input type="text" name="printing"  value="Award Throphy" style="font-weight:bold" class="form-control" readonly required>
</div>

<div class="col-xs-12">
<input type="hidden" id="userName" value="<?php  echo $ID; ?>" readonly name="uin" type="text" placeholder="UIN" class="form-control">
</div>

<div class="col-xs-12">
<label class="control-label">Fullname</label>
<input type="text"  name="fullname" placeholder="Fullname" class="form-control" required autofocus>
</div>

<div class="col-xs-6">
<label class="control-label">Phone No</label>
<input type="text"  name="phone" placeholder="Phone No" class="form-control" required>
</div>

<div class="col-xs-6">
<label class="control-label">Email</label>
<input type="email"  name="email" placeholder="Email Address" class="form-control" required>
</div>

<div class="col-xs-12">
<label class="control-label">Select Shape</label><br>
<input type="radio" name="shape" id="trophy1" class="input-hidden" value="Golden Bub Trophy" required />
<label for="trophy1">
  <img src="file:///C|/wamp/www/unikexpress.com/custom/img/award/Throphy/IMG-20200210-WA0032.jpg" alt="Golden Bub Trophy" />
</label>

<input type="radio" name="shape" id="trophy2" class="input-hidden" value="World Web Trophy" required />
    <label for="trophy2">
  <img src="file:///C|/wamp/www/unikexpress.com/custom/img/award/Throphy/IMG-20200210-WA0033.jpg" alt="World Web Trophy" /><br>
</label>

<input type="radio" name="shape" id="throphy3" class="input-hidden" value="Stature Trophy" required />
    <label for="throphy3">
  <img src="file:///C|/wamp/www/unikexpress.com/custom/img/award/Throphy/IMG-20200210-WA0034.jpg" alt="Stature Trophy" /><br>
</label>

<input type="radio" name="shape" id="trophy4" class="input-hidden" value="Stair Trophy" required />
    <label for="trophy4">
  <img src="file:///C|/wamp/www/unikexpress.com/custom/img/award/Throphy/IMG-20200210-WA0037.jpg" alt="Stair Trophy" /><br>
</label>

<input type="radio" name="shape" id="trophy5" class="input-hidden" value="Thumb Trophy" required />
    <label for="trophy5">
  <img src="file:///C|/wamp/www/unikexpress.com/custom/img/award/Throphy/IMG-20200222-WA0090.jpg" alt="Thumb Trophy" /><br>
</label>

<input type="radio" name="shape" id="trophy6" class="input-hidden" value="Stardom Trophy" required />
    <label for="trophy6">
  <img src="file:///C|/wamp/www/unikexpress.com/custom/img/award/Throphy/IMG-20200222-WA0093.jpg" alt="Stardom Trophy" /><br>
</label>

<input type="radio" name="shape" id="trophy7" class="input-hidden" value="Shake Trophy" required />
    <label for="trophy7">
  <img src="file:///C|/wamp/www/unikexpress.com/custom/img/award/Throphy/IMG-20200222-WA0095.jpg" alt="Shake Trophy" /><br>
</label>

<input type="radio" name="shape" id="trophy8" class="input-hidden" value="Star Trophy" required />
    <label for="trophy8">
  <img src="file:///C|/wamp/www/unikexpress.com/custom/img/award/Throphy/IMG-20200222-WA0096.jpg" alt="Star Trophy" /><br>
</label>

</div>

<div class="col-xs-12">
<label class="control-label">Range</label>
<select name="range" step="any" onChange="sum()" id="range" class="form-control" required="required">
  <option value="">--Select Range--</option>
  <option value="17000">1 - 5 Pieces</option>
  <option value="15000">6 - 20 Pieces</option>
  <option value="14000">21 Pieces - Above</option>
</select>
</div>


<div class="col-xs-12 input-container">
<label class="control-label">Quantity</label>
<input type="number" name="quantity" step="any" onkeyup="sum()" id="quantity" class="form-control" required>
</div>



<div class="col-xs-12">
<label class="control-label">Shipping Method</label><br>
<input type="radio" name="shipping" id="sad1" class="input-hidden" value="Pick Up" required />
<label for="sad1">
  <img src="file:///C|/wamp/www/unikexpress.com/custom/img/pickup.jpg" alt="Pick Up" />
</label>

<input type="radio" name="shipping" id="happy1" class="input-hidden" value="Express Delivery" required />
    <label for="happy1">
  <img src="file:///C|/wamp/www/unikexpress.com/custom/img/standard.jpg" alt="Express Delivery" /><br>
</label>

</div>


<style>
.input-hidden {
  position: absolute;
  left: -9999px;
}

input[type=radio]:checked + label>img {
  border: 1px solid #fff;
  box-shadow: 0 0 3px 3px #090;
}

/* Stuff after this is only to make things more pretty */
input[type=radio] + label>img {
  border: 1px dash #444;
  width: 140px;
  height: 140px;
  transition: 500ms all;
  padding:6px; border-radius:6px
}

input[type=radio]:checked + label>img {
  transform:
    rotateZ(-10deg)
    rotateX(10deg);
}
</style>


<div class="col-xs-12 input-container">
<label class="control-label">Total Price</label>
<input type="number" step="any" id="total_price" onkeyup="sum()" readonly name="total_price" type="text" placeholder="Total Price" class="form-control" required>
 </div>



<div class="col-xs-12">
</div><br>

<?php include("file:///C|/wamp/www/unikexpress.com/custom/wetransfer.php"); ?>


<div class="checkbox pull-left">
<label style="font-size:16px; font-weight: bold; margin-left: 30px">
<input type="checkbox" class="agree" id="agree" required> I agree to Terms and Conditions
</label>
</div>


<div class="col-xs-12 input-container">
<input type="submit" name="submit" value="Submit" class="form-control">
 </div>


<div class="col-xs-12 input-container">
<div id="fileList"></div>
</div>
<div class="modal fade" id="design-terms" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-body" style="padding: 20px; margin-top: 10px;">
<div style="overflow-y: auto; max-height: 300px;">
<div>
<h3 class="term-heading">Unikexpress Design Services</h3>
<ul class="term-list">
<li>You will receive your first design options within 72 working hours of
placing your order
</li>
<li>The design service is an extra service which adds additional time to your
order. Our delivery service level agreement (5 working days for Lagos and
7 working days for other Nigerian cities) will start counting when you approve
your design.
</li>
<li>You will receive your artwork in two design options with the ability to request
three changes on your selected option. Extra changes may attract extra charges.
</li>
<li>Payments made for designer services are non-refundable once we have sent you the designs.
</li>
</ul>
</div>
<div>
<h3 class="term-heading">This service does NOT include:</h3>
<ul class="term-list">
<li>Creating, editing or vectoring logos. If you would like to order a new logo
design, please <a style="color:#717dff;" href="#">click here.</a>
</li>
<li>Creation and revision of texts and sourcing of stock. Customers provide
their own contents.
</li>
</ul>
</div>
</div>
</div>
<div class="modal-footer">
<div class="submit"><input type="submit" id="proceedButton" style="margin:0" class="btn warning link-disabled pull-right proceed" value="Submit" /></div> </div>
</div>

</div>

</div>

<div class="col-xs-10 col-xs-offset-1 input-container" style="margin-top:20px;">
<label class="control-label" for="contact-deatils">

If you need our team to help in editing, updating and redesigning your order,
please <a href="https://api.whatsapp.com/send?phone=2348187472197" style="color: #FF6501" target="_blank">CLICK HERE</a> to order with design request option at an additional fee.
</label>
</div>
</form> </div>
</div>

<div class="col-xs-1 "></div>
<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
<p><span style="font-size:11px"><strong>Unikexpress accepts the following formats:</strong></span></p>
<p>&nbsp;</p>
<p><img alt="Unikexpress accepted files. CDR, PDF, AI and PSD" height="43" src="file:///C|/wamp/www/unikexpress.com/custom/s3-us-west-2.amazonaws.com/printivo/files/ckeditor/1412741503-files.png" width="228" /></p>

<p><span style="font-size:10px"><strong>Please keep the following in mind:</strong></span></p>
<p><span style="font-size:10px"><span style="color:rgb(68, 68, 68)">1.&nbsp;Design with the&nbsp;<strong>&ldquo;bleed&rdquo;</strong>&nbsp;in mind; make sure that important areas of your print product are kept within the safe area. This is to ensure that when your printed products are being trimmed, important information are not trimmed off.</span></span></p>
<p><span style="font-size:10px"><span style="color:rgb(68, 68, 68)">2.&nbsp;Our printers use a 4 colour ink process (<strong>CMYK</strong>). Please be aware that screen colours (RGB) may appear duller or lacking in contrast when printed. Ensure that your designs are created In CMYK process colours.</span></span></p>
<p><span style="font-size:10px"><span style="color:rgb(68, 68, 68)">3.&nbsp;To get the best out of your print order, submit your works in&nbsp;<strong>press-ready </strong>formats, keep all your text and important small design elements in vector formats. To keep your text in vector format, we recommend you design like Adobe Illustrator, Adobe InDesign. Do not save your texts as bitmaps as these may result on fuzzy edges.</span></span></p>
<p><span style="font-size:10px"><span style="color:rgb(68, 68, 68)">4.&nbsp;When uploading designs with a mix of bitmap images, vectors and texts, ensure that your images are 300dpi, when saving your works as PDF, make sure you embed your fonts to avoid the fonts changing when we print your order.</span></span></p>
<p><span style="font-size:10px"><span style="color:rgb(68, 68, 68)">5.&nbsp;Make sure you pre-flight your PDFs using the `Adobe PDF/X-1a` preset. This option can be found in Adobe Illustrator, Adobe InDesign, CorelDraw and more recent versions of Adobe Photoshop.</span></span></p>
<p><span style="font-size:10px"><span style="color:rgb(68, 68, 68)">6.&nbsp;If are uploading CorelDraw, Photoshop or Illustrator files, please<strong> convert all fonts to curves or paths.</strong></span></span></p>
<p><span style="font-size:10px"><span style="color:rgb(68, 68, 68)">7.&nbsp;Make sure your texts are at least 8 pts (very small text may look good on screen but does not print well). Try to keep text in bold colours and mostly in bold colours. When printing lines in a solid or dark colour, make sure they are no thinner than 0.5pt. To achieve perfect readability, avoid multiple coloured texts</span></span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
</div>
</div>
</div>


<div class="col-xs-12">
<p class="text-center copyright">Copyright © 2019 Unikexpress. All rights reserved.</p>
</div>
</div>
</div>
</div>

<script src="file:///C|/wamp/www/unikexpress.com/custom/js/jquery-2.1.4.min.js"></script><script src="file:///C|/wamp/www/unikexpress.com/custom/js/bootstrap.min.js"></script><script src="file:///C|/wamp/www/unikexpress.com/custom/js/paystack.js"></script>
<script src="file:///C|/wamp/www/unikexpress.com/custom/js/jquery.ui.widget.js"></script><script src="file:///C|/wamp/www/unikexpress.com/custom/js/jquery.fileupload.js"></script><script src="file:///C|/wamp/www/unikexpress.com/custom/js/royalslider.js"></script><script src="file:///C|/wamp/www/unikexpress.com/custom/js/jquery.flexslider-min.js"></script><script src="file:///C|/wamp/www/unikexpress.com/custom/js/featherlight.min.js"></script><script src="file:///C|/wamp/www/unikexpress.com/custom/js/PEvents.js"></script>
<script src="file:///C|/wamp/www/unikexpress.com/custom/js/moment.min.js"></script><script src="file:///C|/wamp/www/unikexpress.com/custom/js/moment-timezone.min.js"></script><script src="file:///C|/wamp/www/unikexpress.com/custom/js/moment-timezone-with-data.min.js"></script><script src="file:///C|/wamp/www/unikexpress.com/custom/js/countrySelect.min.js"></script>
<script type="text/javascript" src="file:///C|/wamp/www/unikexpress.com/custom/static.criteo.net/js/ld/ld.js"></script>
<script src="file:///C|/wamp/www/unikexpress.com/custom/js/header.js"></script><script src="file:///C|/wamp/www/unikexpress.com/custom/js/script.js"></script>

<style type="text/css">
    div.clear
    {
        clear: both;
    }

    div.product-chooser{

    }

    div.product-chooser.disabled div.product-chooser-item
    {
        zoom: 1;
        filter: alpha(opacity=60);
        opacity: 0.6;
        cursor: default;
    }

    div.product-chooser div.product-chooser-item{
        padding: 11px;
        border-radius: 6px;
        cursor: pointer;
        position: relative;
        border: 1px solid #efefef;
        margin-bottom: 10px;
        margin-left: 10px;
        margin-right: 10x;
    }

    div.product-chooser div.product-chooser-item.selected{
        border: 3px solid #428bca;
        background: #efefef;
        padding: 8px;
        filter: alpha(opacity=100);
        opacity: 1;
    }

    div.product-chooser div.product-chooser-item img{
        padding: 0;
    }

    div.product-chooser div.product-chooser-item span.title{
        display: block;
        margin: 10px 0 5px 0;
        font-weight: bold;
        font-size: 12px;
    }

    div.product-chooser div.product-chooser-item span.description{
        font-size: 12px;
    }

    div.product-chooser div.product-chooser-item input{
        position: absolute;
        left: 0;
        top: 0;
        visibility:hidden;
    }
</style>
<script src="file:///C|/wamp/www/unikexpress.com/custom/js/design-page.js"></script><script src="file:///C|/wamp/www/unikexpress.com/custom/js/tshirt.js"></script><script src="file:///C|/wamp/www/unikexpress.com/custom/js/dmuploader.min.js"></script><script src="file:///C|/wamp/www/unikexpress.com/custom/js/upload.js"></script>
<script type="text/javascript">
    var deviceType = window.isMobile.any ? (window.isMobile.phone ? 'm' : 't') : 'd';

    window.criteo_q = window.criteo_q || [];
    window.criteo_q.push(
        { event: 'setAccount', account: 59120 },
        { event: 'setEmail', email: "" },
        { event: 'setSiteType', type: deviceType },
        { event: 'viewItem', item: "32" }
    );
</script>
<script type="text/javascript">

    var isTShirt = JSON.parse(false);
    $(document).ready(function() {
        load_new_add_ons($(".product-details"));
        resolve_price($(".product-details"));

        $(".agree").change(function () {
            console.log("there")
            var id = $(this).attr("rel");
            if ($(this).is(":checked")) {
                $(".proceed").toggleClass("link-disabled");
            } else {
                $(".proceed").toggleClass("link-disabled");
            }
        });

        $("#design-form").submit(function(event){
            if(isTShirt && !validateBeforeSubmit()){
                alertMe("Please select the sizes required");

                return false;
            }
            disabled_button($("#proceedButton"), true, "Submitting...");
            return true;
        });
    })
</script><script type="text/javascript">

            ga('ec:addProduct', {"sku":"roll-up-banners-big-base","name":null,"category":"","variant":"custom upload","brand":"Custom Upload","price":0,"coupon_code":null,"quantity":1,"custom_dimension_2":""});

            ga('ec:setAction', 'detail');

        fbq('track', 'Product Viewed');

ga('send', 'pageview');</script>

<script type="text/javascript">
    window.$zopim || (function (d, s) {
        var z = $zopim = function (c) {
            z._.push(c)
        }, $ = z.s =
            d.createElement(s), e = d.getElementsByTagName(s)[0];
        z.set = function (o) {
            z.set.
            _.push(o)
        };
        z._ = [];
        z.set._ = [];
        $.async = !0;
        $.setAttribute("charset", "utf-8");
        $.src = "http://v2.zopim.com/?2TpnKY8t7CSQsszDhPXjLwYXkGELg6zy";
        z.t = +new Date;
        $.
            type = "text/javascript";
        e.parentNode.insertBefore($, e)
    })(document, "script");
</script>




<script type="text/javascript">
    adroll_adv_id = "G7YTI7FNYZEJNA74CS7F22";
    adroll_pix_id = "TGOZX25AQBF3RH7Y3MPZUA";
    (function () {
        var oldonload = window.onload;
        window.onload = function () {
            __adroll_loaded = true;
            var scr = document.createElement("script");
            var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
            scr.setAttribute('async', 'true');
            scr.type = "text/javascript";
            scr.src = host + "/j/roundtrip.js";
            ((document.getElementsByTagName('head') || [null])[0] ||
            document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
            if (oldonload) {
                oldonload()
            }
        };
    }());
</script>

<script type="text/javascript">
    $(document).ready(function (evt) {

    });
</script>




<script type="text/javascript">
    _atrk_opts = {atrk_acct: "pE7Ui1a4ZP00yG", domain: "Unikexpress.com", dynamic: true};
    (function () {
        var as = document.createElement('script');
        as.type = 'text/javascript';
        as.async = true;
        as.src = "d31qbv1cthcecs.cloudfront.net/atrk.js";
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(as, s);
    })();
</script>
<noscript><img src="file:///C|/wamp/www/unikexpress.com/custom/d5nxst8fruw4z.cloudfront.net/atrk80cd.gif?account=pE7Ui1a4ZP00yG" style="display:none"
               height="1" width="1" alt=""/></noscript>

<script>
    window['_fs_debug'] = false;
    window['_fs_host'] = 'fullstory.com';
    window['_fs_org'] = '6XPR7';
    window['_fs_namespace'] = 'FS';
    (function(m,n,e,t,l,o,g,y){
        if (e in m) {if(m.console && m.console.log) { m.console.log('FullStory namespace conflict. Please set window["_fs_namespace"].');} return;}
        g=m[e]=function(a,b){g.q?g.q.push([a,b]):g._api(a,b);};g.q=[];
        o=n.createElement(t);o.async=1;o.src='https://'+_fs_host+'/s/fs.js';
        y=n.getElementsByTagName(t)[0];y.parentNode.insertBefore(o,y);
        g.identify=function(i,v){g(l,{uid:i});if(v)g(l,v)};g.setUserVars=function(v){g(l,v)};
        g.identifyAccount=function(i,v){o='account';v=v||{};v.acctId=i;g(o,v)};
        g.clearUserCookie=function(c,d,i){if(!c || document.cookie.match('fs_uid=[`;`]*`[`;`]*`[`;`]*`')){
        d=n.domain;while(1){n.cookie='fs_uid=;domain='+d+
        ';path=/;expires='+new Date(0).toUTCString();i=d.indexOf('.');if(i<0)break;d=d.slice(i+1)}}};
    })(window,document,window['_fs_namespace'],'script','user');


    </script>
</body>

<!-- Mirrored from Unikexpress.com/custom/roll-up-banners-big-base by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Oct 2019 13:13:52 GMT -->
</html>
