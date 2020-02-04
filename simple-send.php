 <?php 
 
  $to = $_POST['recipient'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $header = "From:abc@somedomain.com \r\n";
  $header .= "MIME-Version: 1.0\r\n";
  $header .= "Content-type: text/html\r\n";

  $retval = mail ($to,$subject,$message,$header);

  if( $retval == true ) {
	echo "Message sent successfully...";
  }else {
	echo "Message could not be sent...";
  }
  
 ?>
