 
 <?php  


 
function e($sData){
	$id=(double)$sData*525325.24;
	return base64_encode($id);
}

function d($sData){
	$url_id=base64_decode($sData);
	$id=(double)$url_id/525325.24;
	return $id;
}





function send_email($data){
	
	
	$email = $data['email'];
	
		$headers = "Content-type: text/html";
		$subject = "test send email";
		$comment = "dear ".$data['name'];
		$comment .= "wow magic";
		  
	
		  //send email
		if(mail($email, $subject, $comment, $headers)){
			 //Email response
			  echo "wow magic!!";
			  // echo "We’ve just sent an email to your address: ".$email."<br>";
			  // echo "Please check your email and click on the link provided to verify your address.";
		}
	
}
	
