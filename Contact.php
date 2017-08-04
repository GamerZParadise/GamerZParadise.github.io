<?php
    $emailSubject='Crazy PHP Scripting!';
    $webMaster = 'markymark5127@gmail.com';
    
    $emailField = $_POST['email'];
    $nameField = $_POST['name'];
    $messageField = $_POST['message'];
    
    $body = <<<EOD
<br><hr><br>
Email: $email <br>
Name: $name <br>
Message: $message <br>
EOD;
    
    $headers = "From: $email\r\n";
    $headers .= "Content-type: text/html\r\n";
    $success = mail($webMaster, $emailSubject, $body, $headers);
    
    
    $theResults = <<<EOD
<!DOCTYPE HTML PUBLIC>
<html>
<head>
<title>Thank you!</title>
</head>
<body>
Thanks for the submission!
</body>
</html>
EOD;
echo"$theResuts";
?>
