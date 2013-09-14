  <div data-role="page" id="six" data-theme="b">
<?php
if (isset($_GET['submit']))
$name=$_GET['name'];
$phone=$_GET['phone'];
$email=$_GET['email'];
$rservice=$_GET['rservice'];
$rsytlist=$_GET['rsytlist'];
$date=$_GET['date'];
$message=$_GET['message'];

require("PHPMailer-master/class.phpmailer.php");
	
	
$mail = new PHPMailer();
$mail->IsSMTP(); // set mailer to use SMTP
$mail->Host = "ssl://smtp.gmail.com"; // specify main and backup server
$mail->Port = 465; // set the port to use
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "kdhjr23@gmail.com"; // your SMTP username or your gmail username
$mail->Password = "ss@325055"; // your SMTP password or your gmail password
$from = $email; // Reply to this email
$to="kdhjr23@gmail.com"; // Recipients email ID
$name=$name; // Recipient's name
$mail->From = $email;
$mail->FromName = $name; // Name to indicate where the email came from when the recepient received
$mail->AddAddress($to,$name);
$mail->AddReplyTo($name,$email);
$mail->WordWrap = 100; // set word wrap
$mail->IsHTML(true); // send as HTML
$mail->Subject = "Hair Appointment";
$mail->Body= "Name: ".$_GET["name"] . " <br/> Phone: " .$_GET["phone"] . " <br/> Email: ".$_GET["email"] . "<br/> Service:" .$_GET["rservice"] . "<br/> Stylist:" .$_GET["rsytlist"] . "<br/> Date:" .$_GET["date"] . "<br/> Message:" .$_GET["message"] . "\r\n";
if(!$mail->Send())
{
echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
header("Location: ../app.html");
}

?>
</div>

