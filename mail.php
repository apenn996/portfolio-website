<?php
ini_set('display_errors', true);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception; 
require dirname(__FILE__).'/vendor/autoload.php';

if ( isset( $_POST[ 'submit' ] ) ) {
	
    $err = "";
    if ( isset( $_POST[ 'name' ] ) && $_POST[ 'name' ] != "" ) {
      $name = addslashes($_POST[ 'name' ]);
      $_SESSION[ 'name' ] = $name;
    } else $err .= "Fnamenull";
  

    if ( isset( $_POST[ 'email' ] ) && $_POST[ 'email' ] != "" ) {
      $email = $_POST[ 'email' ];
      $_SESSION[ 'email' ] = $email;
    } else $err .= "Emailnull";

    if ( isset( $_POST[ 'pNumber' ] ) && $_POST[ 'pNumber' ] != "" ) {
      $pNumber = $_POST[ 'pNumber' ];
      $_SESSION[ 'pNumber' ] = $pNumber;
    } else $err .= "PNumbernull";

    if ( isset( $_POST[ 'subject' ] ) && $_POST[ 'subject' ] != "" ) {
        $subject = $_POST[ 'subject' ];
        $_SESSION[ 'subject' ] = $subject;
      } else $err .= "subjectnull";

    if ( isset( $_POST[ 'comment' ] ) && $_POST[ 'comment' ] != "" ) {
      $comment = addslashes($_POST[ 'comment' ]);
      $_SESSION[ 'comment' ] = $comment;
    } //else $err .= "Commentnull";
   

    




















    // $recipient="austinpennartz@gmail.com"; //Enter your mail address
    // $subject=$_POST['subjects']; //Subject 
    // $sender=$_POST["name"];
    // $senderEmail=$_POST['email'];
    // $message=$_POST["comment"];
    // $mailBody="Name: $sender\nEmail Address: $senderEmail\n\nMessage: $message";
    // sendmail($recipient, $subject, $mailBody);
    
    // if()
    //     echo 'yes it worked';
    // else
    //     echo 'no it did not work';

    
}

$sender='****************'; 
$senderName='WebsiteEmail'; 




// Target Email address
$recipient='austinpennartz@gmail.com'; 
$usernameSmtp = "*****************";
$passwordSmtp ="****************************************";
$host = "**********************";
$port = ***;

$subject=$_POST['subject']; 
$bodyText= "<h1> <b>From:</b> " . $_POST['email'] . "       ---      Phone #: " . $_POST['pNumber'] ."</h1>" . "<h2> <b>Their name:</b> " .$_POST['name'] . "</h2>" . "<p><b>Their Message:</b> " .$_POST['comment'] . "</p>";
// "From:" . $_POST[ 'email' ] . " Name: " .  $_POST['name'] . "  Their message: " .  $_POST[ 'comment' ]; 
$bodyHtml = '<h2> Header test <h2>';
// Buiding the email object attributes 
$mail = new PHPMailer(true); 
try{
    $mail->isSMTP();
    $mail->setFrom($sender, $senderName);
    $mail->Username = $usernameSmtp;
    $mail->Password = $passwordSmtp;
    $mail->Host = $host;
    $mail->Port = $port;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';

    $mail->addAddress($recipient, "Austin");
    //$mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $bodyText;
    $mail->AltBody = $bodyHtml;
    $mail->Send();
     	
	header('location: https://www.austinpennartz.net/portfolio.php');


} catch(phpmailerException $e){
    echo "An Error Occured. {$e->errorMessage()}", PHP_EOL;
} catch(Exception $e){
    echo "Email not sent. {$mail->ErrorInfo}", PHP_EOL;
}



?>