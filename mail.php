  <?php
$chk = 500;
if(isset($_POST['contact_us']))
{

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $msg = $_POST['msg'];
  
  $to = $form_email;
  $subject = 'Mail Form Contact Us';
  
  $headers = 'MIME-Version: 1.0'."\r\n";
  $headers .= 'Content-Type: text/html; charset=iso-8859-1 vs utf-8'."\r\n";
  $headers .= 'From: android.chandan2015@gmail.com.com'."\r\n";
  $headers .= 'To: android.chandan2015@gmail.com.com'."\r\n";
//   $headers .= 'CC: acmweb2017@gmail.com'."\r\n";
  
  $message = '<html><body><center>';
  $message .= '<h2 style="color:#009688;">Mail Form Contact Us</h2>';
  $message .= '<table rules="all" style="border-color:#666;border:1px solid #ccc;" cellpadding="10">';
  $message .= "<tr><td><strong>Name:</strong> </td><td>" .$name. "</td></tr>";
  $message .= "<tr><td><strong>Email:</strong> </td><td>" .$email. "</td></tr>";
  $message .= "<tr><td><strong>Phone:</strong> </td><td>" .$phone. "</td></tr>";
    $message .= "<tr><td><strong>Message:</strong> </td><td>" .$msg. "</td></tr>";
  
  $message .= "</table>";
  $message .= "</center></body></html>";

//echo $message;
mail($to, $subject, $message, $headers);
$chk = 1;
}
?>

<html>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<head>
</head>

<body>
<div class="mail_scu">
  <div class="hed_sho">
<p><strong>Message Successfully Sent!</strong></p>
<span>Thank you for contact us! <br>One of our <mark><u>Guru Gyan Vidya Mandir School</mark></u> representative will get in touch with you soon.</span>
<!-- <a href="index.php"><button class="back_cod" type="button">Go To Back</button></a> -->

</div></div>

</body></html>

<style type="text/css">


 
@import url('https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap');
 
 


body {
    /*font-family: 'Rubik', sans-serif;
*/    font-family: 'Barlow Semi Condensed', sans-serif !important;
    font-weight: 400;
    font-style: normal;
    font-size: 14px;
    color: #454545;
    background: #fff;
}
  
.mail_scu {
    position: absolute;
    background: #2b2b2b;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
}

.hed_sho {
    width: 38%;
    background: #a87e28;
    position: absolute;
    left: 31%;
    top: 10%;
    padding: 23px;
    text-align: center;
    border-radius: 5px;
}

.hed_sho p {
    font-size: 25px;
    color: #fff;
    font-weight: 600;
}

.hed_sho span {
    color: #fff;
    font-size: 22px;
    float: left;
    width: 100%;
    margin-bottom: 15px;
}

button.back_cod {
    background: white;
    padding: 14px;
    font-weight: 600;
    font-size: 16px;
    border: 0;
    border-radius: 5px;
    cursor: pointer;
}






@media (min-width: 10px) and (max-width: 991px)
{

.hed_sho {
    width: 78%;
    background: #a87e28;
    position: absolute;
    padding: 23px;
    text-align: center;
    border-radius: 5px;
    margin: auto;
    left: 0;
    right: 0;
    top: 50px;
}
}












</style>