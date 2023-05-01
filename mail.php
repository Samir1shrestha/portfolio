<?php

//get data from form  
$name = $_POST['name'];
$lname=$_POST['lname'];
$email= $_POST['email'];
$subjectt=$_POST['subject'];
$message= $_POST['message'];
$to = "samirstha1@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n LastName = ". $lname . "\r\n  Subject = ". $subjectt . "\r\n Email = " . $email . "\r\n Message =" . $message;
$headers = "From: $email" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
	echo"thank you for your concern.";
}
else{
	echo"failed sending message";
}
//redirect
header("Location:index.html");







// if ($_SERVER["REQUEST_METHOD"] == "POST") {
// 	$name = $_POST["name"];
// 	$email = $_POST["email"];
// 	$subject = $_POST["subject"];
// 	$message = $_POST["message"];
// 	$to = "samirstha1@gmail.com"; 
// 	$headers = "From: $name <$email>";
// 	if (mail('samirstha1#gmail.com', $subject, $message, $headers)) {
// 		echo "Email sent successfully!";
// 	} else {
// 		echo "Failed to send email.";
// 	}
// }
?>

