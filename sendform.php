<?php

	$ten = $_GET['ten'] ? $_GET['ten'] : "";
	$vi = $_GET['vi'] ? $_GET['vi'] : "";
	$email = $_GET['email'] ? $_GET['email'] : "";
	$tw = $_GET['tw'] ? $_GET['tw'] : "";

	$to = "bapdola304@gmail.com";
		$subject = "New subscribe";
		$message="Name: ".$ten."\n"."Email: ".$email."\n"."Vi: ".$vi."\n"."Twitter: ".$tw;
		$headers = "From: ".$email;

	if($ten == "" || $vi== "" || $email == ""|| $tw == ""){
		echo $a = 1;
		
					
	}else{
	
		 $send = mail($to, $subject, $message,$headers);
							if($send){
								echo $a = 2;
							}
							else{
								echo $a = 3;
							}
		
	}
			
		


?>
