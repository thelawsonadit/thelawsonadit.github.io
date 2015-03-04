<?php

$email= $_POST['email'];
$sid = $_POST['sid'];


$email_pattern = '/.+@berkeley.edu';
$sid_pattern = '[0-9]+'

if !(preg_match($email_pattern, $email)){
  
  echo 'Invalid email. Must be @berkeley.edu. Click <a href=http://thelawsonadit.com>here</a> to try again.';
  return;
}

if !(preg_match($sid_pattern, $sid)){
  echo 'Invalid Student ID. Must be numbers only.';
  return;
}

$to = 'thelawsonadit@gmail.com, ' + $email;
$subject = "Written FERPA request for Admissions Documents";
$body = 'Hey there! This is a written FERPA access request. I am requesting access to all documents held by the University of California, Berkeley Office of Undergraduate Admissions, including without limitation a complete copy of any admissions records kept in my name in any and all university offices: any e-mails, notes, memoranda, video, audio, including all associated content from the “holistic review process” (including without limitation the qualitative and quantitative assessments of any internal or external 'readers,' demographics data, interview records) or other documentary material maintained by the Office of Undergraduate Admissions. I look forward to receiving access to these documents within 45 calendar days. My student ID is: ' + $sid;

$headers = 'From: ' + $email;
if (mail($to, $subject, $body, $headers)){
  echo 'Email successfully sent! Check your inbox.'
} else {
  echo "Email not successfully sent but we don't know why. Try using the alternate method in our newsletter."
}
?>
