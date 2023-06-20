<?php
include('includes/dbconnection.php');

require_once 'vendor/autoload.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
$mail = new PHPMailer(true);
session_start();
error_reporting(0);
if (isset($_POST['submit'])) {


    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $services = $_POST['services'];
    $adate = $_POST['adate'];
    $atime = $_POST['atime'];
    $aptnumber = mt_rand(100000000, 999999999);

  
    $phonemessage="$name your appointment is Successfully Booked with \r\n
    Appointment-Number:\r\n$aptnumber \r\n
    Date:$adate \r\n 
    Time:$atime \r\n 
    Requested Service:$services \r\n 
    Our Servcie Provider Will Reach You Within 24 hrs \r\n 
    Thank you.";
try {
  // Create a Twilio client
  
  $sid = "AC0a14c5dbafe4da172a12d49c3c56937c";
   $token = "042d2690a71a2c5acc7bbb4ab4e0570d";
  $client = new Twilio\Rest\Client($sid, $token);
  // Get the phone number from the form
  // Send an SMS message
  $client->messages->create($phone, [
    'from' => '+14065007014',
    'body' => $phonemessage
  ]);
  echo "SMS sent successfully!";
  $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port = 587;

  $mail->Username = 'perfectbuild952@gmail.com'; // YOUR gmail email
  $mail->Password = 'ybvdbzrrlcrkjhno'; // YOUR gmail password

  // Sender and recipient settings
  $mail->setFrom('perfectbuild952@gmail.com', 'no-reply');
  $mail->addAddress($email); 
  $mail->addReplyTo('perfectbuild952@gmail.com', 'Perfect Build Services'); // to set the reply to
  $signature = '
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body>
<p>Your Appointment is successfully booked with the details below:</p>
<table>
<tr>
   <th>Appointment Number:</th>
   <td>'.$aptnumber.'</td>
</tr>
<tr>
   <th>Name:</th>
   <td>'.$name.'</td>
</tr>
<tr>
   <th>Appointment Date:</th>
   <td>'.$adate.'</td>
</tr>
<tr>
   <th>Appointment Time:</th>
   <td>'.$atime.'</td>
</tr>
<tr>
   <th>Address:</th>
   <td>'.$address.'</td>
</tr>
<tr>
   <th>Phone:</th>
   <td>'.$phone.'</td>
</tr>
<tr>
   <th>Requested Service:</th>
   <td>'.$services.'</td>
</tr>
</table>
<p>Our Service Provider will reach you within 24 hours.</p>
<table id="zs-output-sig" border="0" cellpadding="0" cellspacing="0" style="font-family:Arial,Helvetica,sans-serif;line-height:0px;font-size:1px;padding:0px!important;border-spacing:0px;margin:0px;border-collapse:collapse; width:550px;">
   <tbody>
      <tr>
         <td style="padding:0px!important;">
            <table id="inner-table" border="0" cellpadding="0" cellspacing="0" style="font-family:Arial,Helvetica,sans-serif;line-height:0px;font-size:1px;padding:0px!important;border-spacing:0px;margin:0px;border-collapse:collapse;">
               <tbody>
                  <tr>
                     <td style="border-collapse: collapse; font-family: Calibri, Helvetica, sans-serif; font-size: 15px; font-style: normal; line-height: 17px; font-weight: 400; padding-bottom: 14px;">
                        <p style="margin: 0.04px;"><span style="font-family:Calibri,Helvetica,sans-serif;font-size:15px;font-style:normal;line-height:17px;font-weight:400;color:#000001;display:inline;">Kind Regards,</span></p>
                     </td>
                  </tr>
               </tbody>
            </table>
         </td>
      </tr>
      <tr>
         <td style="padding:0px!important;">
            <table id="inner-table" border="0" cellpadding="0" cellspacing="0" style="font-family:Arial,Helvetica,sans-serif;line-height:0px;font-size:1px;padding:0px!important;border-spacing:0px;margin:0px;border-collapse:collapse;">
               <tbody>
                  <tr>
                     <td width="139" style="padding-right: 8px;">
                        <table border="0" cellpadding="0" cellspacing="0" style="font-family:Arial,Helvetica,sans-serif;line-height:0px;font-size:1px;padding:0px!important;border-spacing:0px;margin:0px;border-collapse:collapse;">
                           <tbody>
                              <tr>
                                 <td style="border-collapse: collapse; line-height: 0px; padding-right: 1px;">
                                    <p style="margin: 0.04px;"><img height="139" width="139" alt="image" border="0" src="https://img2.gimm.io/2aca1990-e4de-4a50-9b19-8d93f2f582c2/-/resize/278x278/img.png"></p>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </td>
                     <td style="border-collapse:collapse;background-color:#62ca3e;width:4px;vertical-align:super;padding:0px!important;"></td>
                     <td style="border-collapse:collapse;padding-right:22px;"></td>
                     <td style="padding:0px!important;">
                        <table border="0" cellpadding="0" cellspacing="0" style="font-family:Arial,Helvetica,sans-serif;line-height:0px;font-size:1px;padding:0px!important;border-spacing:0px;margin:0px;border-collapse:collapse;">
                           <tbody>
                              <tr>
                                 <td style="border-collapse: collapse; font-family: Calibri, Helvetica, sans-serif; font-size: 18px; font-style: normal; line-height: 20px; font-weight: 700; padding-bottom: 16px;">
                                    <p style="margin: 0.04px;"><span style="font-family:Calibri,Helvetica,sans-serif;font-size:18px;font-style:normal;line-height:20px;font-weight:700;color:#62ca3e;display:inline;">Perfect Build&nbsp;</span> <span style="font-family:Calibri,Helvetica,sans-serif;font-size:18px;font-style:normal;line-height:20px;font-weight:700;color:#7d0d6f;display:inline;">Services&nbsp;</span></p>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                        <table border="0" cellpadding="0" cellspacing="0" style="font-family:Arial,Helvetica,sans-serif;line-height:0px;font-size:1px;padding:0px!important;border-spacing:0px;margin:0px;border-collapse:collapse;">
                           <tbody>
                              <tr>
                                 <td style="border-collapse:collapse;font-family:Calibri,Helvetica,sans-serif;font-size:15px;font-style:normal;line-height:17px;font-weight:400;padding:0px!important;">
                                    <p style="margin: 0.04px;"><span style="font-family:Calibri,Helvetica,sans-serif;font-size:15px;font-style:normal;line-height:17px;font-weight:400;color:#62ca3e;display:inline;">Email:</span> <span style="font-family:Calibri,Helvetica,sans-serif;font-size:15px;font-style:normal;line-height:17px;font-weight:400;color:#000001;display:inline;">perfectbuild952@gmail.com&nbsp;</span> <span style="font-family:Calibri,Helvetica,sans-serif;font-size:15px;font-style:normal;line-height:17px;font-weight:400;color:#62ca3e;display:inline;">Mobile:</span> <span style="font-family:Calibri,Helvetica,sans-serif;font-size:15px;font-style:normal;line-height:17px;font-weight:400;color:#000001;display:inline;">9104671383&nbsp;</span></p>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                        <table border="0" cellpadding="0" cellspacing="0" style="font-family:Arial,Helvetica,sans-serif;line-height:0px;font-size:1px;padding:0px!important;border-spacing:0px;margin:0px;border-collapse:collapse;">
                           <tbody>
                              <tr>
                                 <td style="border-collapse: collapse; font-family: Calibri, Helvetica, sans-serif; font-size: 15px; font-style: normal; line-height: 17px; font-weight: 400; padding-bottom: 22px;">
                                    <p style="margin: 0.04px;"><span style="font-family:Calibri,Helvetica,sans-serif;font-size:15px;font-style:normal;line-height:17px;font-weight:400;color:#000001;display:inline;">Ahmedabad,Gujarat,India</span></p>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                        <table border="0" cellpadding="0" cellspacing="0" style="font-family:Arial,Helvetica,sans-serif;line-height:0px;font-size:1px;padding:0px!important;border-spacing:0px;margin:0px;border-collapse:collapse;">
                           <tbody>
                              <tr>
                                 <td style="padding:0px!important;">
                                    <table border="0" cellpadding="0" cellspacing="0" style="font-family:Arial,Helvetica,sans-serif;line-height:0px;font-size:1px;padding:0px!important;border-spacing:0px;margin:0px;border-collapse:collapse;">
                                       <tbody></tbody>
                                    </table>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </td>
                  </tr>
               </tbody>
            </table>
         </td>
      </tr>
      <tr>
         <td style="border-collapse:collapse;padding-bottom:16px;"><span></span></td>
      </tr>
   </tbody>
</table>
</body>
</html>';

  // Setting the email content
  $mail->IsHTML(true);
  $mail->Subject = "Perfect build services";
  $mail->Body =$signature;
  $mail->AltBody = 'Error while requesting your data.';

  $mail->send();
  echo "Email message sent.";
} catch (Exception $e) {
  echo "Error: " . $e->getMessage();
  echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}


    $query = mysqli_query($con, "insert into tblappointment(AptNumber,Name,Email,PhoneNumber,Address,AptDate,AptTime,Services) value('$aptnumber','$name','$email','$phone','$address','$adate','$atime','$services')");
    if ($query) {
        $ret = mysqli_query($con, "select AptNumber from tblappointment where Email='$email' and  PhoneNumber='$phone'");
        $result = mysqli_fetch_array($ret);
        $_SESSION['name'] = $result['name'];
        $_SESSION['aptno'] = $result['AptNumber'];
        echo "<script>window.location.href='thank-you.php'</script>";
    } else {
        echo "<script>alert('Something Went Wrong. Please try again.');</script>";
    }


}

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Appointment Details</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Style -->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<?php include_once('includes/header.php'); ?>

<div class="content">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1>Appointment Form</h1>
                        <p> Book your appointment.</p>
                        <form method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label" for="name">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Name" name="name"
                                           required="true">
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo '+91'; ?>" placeholder="Phone"
                                           required="true" maxlength="13">
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                           required="true">
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="address">Address</label>
                                    <input type="text" class="form-control" id="address" placeholder="Address"
                                           name="address" required="true">
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="Subject">Services</label>
                                    <select name="services" id="services" required="true" class="form-control">
                                        <option value="">Select Services</option>
                                        <?php $query = mysqli_query($con, "select * from tblservices");
                                        while ($row = mysqli_fetch_array($query)) {
                                            ?>
                                            <option value="<?php echo $row['ServiceName']; ?>"><?php echo $row['ServiceName']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label" for="textarea">Appointment Date</label>
                                        <input type="date" class="form-control appointment_date" placeholder="Date"
                                               name="adate" id='adate' required="true">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label" for="textarea">Appointment Time</label>
                                        <input type="time" class="form-control appointment_time" placeholder="Time"
                                               name="atime" id='atime' required="true">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" id="submit" name="submit" class="btn btn-default" href="thank-you.php">Book
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/menumaker.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/sticky-header.js"></script>
</body>

</html>
