<?php
	require("../includes/config.php");
	
	if(isset($_POST["submit"])) {
		// Sanitize user input
		$_POST = array_map('trim', $_POST);

		// Get form information
		$firstname = $_POST["firstname"];
		$lastname = $_POST["lastname"];
		$name = $firstname ." ". $lastname;
		$mail_from = $_POST["email"];
		$comment = $_POST["comment"];
	
	} else {
		echo("Location: ../html/error.html");
	}
			
	// Build the email body
	$subject = "Message from " .$name;
	$body_message = "From:    " .$name. "\r\n";
	$body_message .= "Email:   <" .$mail_from. ">\r\n";
	$body_message .= "Message: " .$comment. "\r\n";
	
	// Set the headers
	$headers = "From: <" .$mail_from. ">\r\n";
	$headers .= "Reply-To: <" .$mail_from. ">\r\n";

	// Send the email
    $mail_status = mail(EMAIL, $subject, $body_message, $headers);

	
    if($mail_status) {
		// Log the message and redirect
		log_message($body_message);
        header("Location: ../html/thanks.html");
    } else {
		// Redirect to error page
        echo("Location: ../html/error.html");
    }
	
	function log_message($message) {
		$log_file = fopen(LOG_FILE_PATH, "a") or die ("Unable to open file!");
		$text = $message . "\n";
		$text .= "--------------------------------------------------\r\n";
		
		fwrite($log_file, $text);
		fclose($log_file);
	}
?>
