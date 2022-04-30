<?php

$db = mysqli_connect('localhost', 'twoway', 'Drshn@1710', 'twoway');
include('libraries/PHPMailer-master/PHPMailerAutoload.php');
include('include/database_connection.php');

if (!$db) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    exit;
}



$errors = [];
$errorFlag = false;
if(isset($_POST) && !empty($_POST)){

	
	$name = trim($_POST['name']);
	$email      = trim($_POST['email']);
	$mobile 	= trim($_POST['mobile']);
	$message 		= trim($_POST['message']);
	$subject = "Enquiry from website";


	if(empty($name)){
		$errors['name'] = 'Name is required';
		$errorFlag = true;
	}

	if(empty($email)){
		$errors['email'] = 'Email is required';
		$errorFlag = true;
	}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$errors['email'] = 'Email is not valid';
		$errorFlag = true;
	}

	if(empty($mobile)){
		$errors['mobile'] = 'Mobile is required';
		$errorFlag = true;
	}else if(!preg_match('/^[0-9]{10}+$/', $mobile)){
		$errors['mobile'] = 'Mobile is not valid';
		$errorFlag = true;
	}

	if(empty($message)){
		$errors['message'] = 'Message is required';
		$errorFlag = true;
	}


	if(!$errorFlag){
		

		$sql = "INSERT INTO enquiry (name,email,mobile,message) VALUES('".$name."','".$email."','".$mobile."','".$message."')";

		
	// $mail = new PHPMailer();
 //        $mail->SMTPDebug = 2;
 //        $mail->IsSMTP(); // we are going to use SMTP
 //        $mail->SMTPAuth   = true; // enabled SMTP authentication
 //        $mail->SMTPSecure = "tls";  // prefix for secure protocol to connect to the server
 //        $mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
 //        $mail->Port       = 587;                   // SMTP port to connect to GMail
 //        $mail->Username   = "smartads.darshan@gmail.com";  // user email address
 //        $mail->Password   = "WagonR@2022";            // password in GMail
 //        $mail->SetFrom("team@twowacommunications.in","Two Way Communications");  //Who is sending the email
 //        $mail->AddAddress("team@twowacommunications.in","Two Way Communications");  //email address that receives the response
 //       // $mail->AddAddress("ashishbabariya.8@gmail.com","IIT-Minds");  //email address that receives the response
 //        $mail->IsHTML(true);
 //        $mail->Subject = $subject;
 //        $mail->Body = $message;

 //        if($mail->send()){		
 //            echo  "true";exit;		
 //        }else{
 //        	//echo $mail->ErrorInfo;exit;
	// 		// create email headers
 //            $email_from =  "team@twowacommunications.in";
 //            $email_to = "team@twowacommunications.in";
 //            $email_subject = $subject;
 //            $email_message = $message;
 //            $headers = "MIME-Version: 1.0" . "\r\n";
 //            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 //            $headers .= 'From: '.$email_from."\r\n".
 //            'Reply-To: '.$email_from."\r\n" .
 //            'X-Mailer: PHP/' . phpversion();
            
 
 //            if(@mail($email_to, $email_subject, $email_message, $headers)){
 //                echo  "true";		
 //            }else{
	// 	    	echo 'false';			
	// 	    }
	// 	}

	    $returnArr = array('errorFlag'=>$errorFlag,'message'=>'we will contact you shortly');
	    echo json_encode($returnArr);
	}else{
		$returnArr = array('errorFlag'=>$errorFlag,'messages'=>$errors);
		echo json_encode($returnArr);
	}
	
}

