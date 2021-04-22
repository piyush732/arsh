<?php
	if(isset($_POST) && !empty($_POST)) {
		$to = "singharsh625@gmail.com,webdevpiyush@gmail.com";
		$subject = $_POST['ContactName']." has contacted you!";
		$message = "Name: ".$_POST['ContactName'];
		$message .= "Email: ".$_POST['Contact-Email'];
		$message .= "Subject: ".$_POST['subject'];
		$message .= "Comment: ".$_POST['ContactCommentt'];
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: <webdevpiyush@gmail.com>' . "\r\n";
		mail($to,$subject,$message,$headers);
	}
?>