<?php

if (isset($_POST['submit'])) {
	
	$first = $_POST['first'];
	$last = $_POST['last'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	$mailTo = "andrea@luxelashllc.com";
	
	$headers = "From: ".$email;
	$txt = "You have recieved an email from".$first.$last.".\n\n". $message;
	
	mail($mailTo, $subject, $txt, $headers);
	header("Location: index.html?mailsend");		
}
