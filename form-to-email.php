<?php

// if(!isset($_POST['submit']))
// {
// 	//This page should not be accessed directly. Need to submit the form.
// 	echo "error; you need to submit the form!";
// }
if(!empty($_POST)){
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];

  try{
    if(empty($name)||empty($visitor_email)||empty($subject)){
        $output->status = false;
        $output->message = "Name, email and subject are mandatory!";
    }
    else{
      $email_from = 'toyinadesina60@gmail.com';//<== update the email address
      $email_subject = "(New Form submission from Your Web Page)";
      $email_body = "You have received a new message from the user $name.\n".
          "Here is the message:\n $message".

      $to = "toyinadesina60@gmail.com";//<== update the email address
      $headers = "From: $email_from \r\n";
      $headers .= "Reply-To: $visitor_email \r\n";
      $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-type: text/html\r\n";
      //Send the email!
      $ref = mail($to, $email_subject, $email_body, $headers);

      if($ref){
        $output->success = true;
        $output->message = "succesful";
      }else{
        $output->success = false;
        $output->message = "not succesful";
      }
    }
    print_r(json_encode($output));

  }catch(error $e){
    print_r($e);
  }
}



//done. redirect to thank-you page.
// header('Location: thank-you.php');



echo json_encode($message);


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}

?>
