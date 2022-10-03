<?php
	$name =$_POST['name'];
	$visitor_email = $_POST['email'];
	$massage = $_POST['massage'];

	$email_from = 'm.hasan.sakib.1999@gmail.com';

	$email_subject = "New massage form web";

	$email_body = "User Name: $name.\n".
					"User email: $visitor_email.\n".
					  "User phone number: $visitor_pnhone_number.\n".
					    "User Massage: $massage.\n";

	$to = "hasansakib461@gmail.com";

	$headers = "From: $email_from\r\n";

	$headers = "Reply-To: $visitor_email\r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("Location: index.html");
?>