<?php
if (isset($_POST['send'])) {
	$to = 'm.lokeshvenkatasai@gmail.com';
	$subject = 'Query from Website';
	
	$message = 'Name: '.$_POST['name']."\r\n\r\n";
	$message .= 'Email: '.$_POST['email']."\r\n\r\n";
    $message .= 'Phone Number: '.$_POST['phone']."\r\n\r\n";
	$message .= 'Message: '.$_POST['msg']."\r\n\r\n";
	
	

	$success = mail($to, $subject, $message);

	$thankYou = '<h1>Thank You<h1>\n<p>Your mail has been sent</p>';

	$sorry = '<h1>Oops!</h1><p>There was problem sending your mail</p>';
	
	if (isset($success) && $success) {
		echo $thankYou;
	} else {
		echo $sorry;
	}
}
?>