<?php
if(isset($_POST['submit'])){
  $to = 'info@ea-ortho.com';
  $from = $_POST['email'];
  $full_name = $_POST['full_name'];
  $email = $_POST['email'];
  $body_region = $_POST['body_region'];
  $inquiry = $_POST['inquiry'];


  $subject = $_POST['subject'];
  $subject2 = "[Inquiry Received] - Copy of your form submission";

  $message =  "Name: ".$full_name."\nEmail: ".$email. "\nBody Region: ".$body_region."\nSubject: ".$subject."\n\nInquiry: ".$inquiry;

  $message2 = "Greetings ".$full_name."\nHere is a copy of your EA-Ortho inquiry:\n\n"."Name: ".$full_name."\nEmail: ".$email."\nBody Region: ".$body_region."\nSubject: ".$subject."\n\nInquiry: ".$inquiry."\n\nWe will get back to you as soon as possible with a response to your inquiry. Thank you for choosing EA-Ortho.";

  $headers = "From:" . $from;
  $headers2 = "From:" . $to;

  mail($to,$subject,$message,$headers);

  if (mail($from,$subject2,$message2,$headers2)){
    echo "Message Accepted";
  }else{
    echo"Error: Message not accepeted";
  }

  //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
  // header('Location: index.html');

}
?>
