<?php
date_default_timezone_set('Asia/Manila');

function onEmailSend(string $num)
{
    $font = "font-family: 'Bebas Neue', sans-serif;";
    return '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml" lang="en">
    <head><link rel="stylesheet" type="text/css" hs-webfonts="true" href="https://fonts.googleapis.com/css?family=Lato|Lato:i,b,bi">
    <title>Thank You for Registering</title>
    <meta property="og:title" content="Photobooth Registration">
    
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style type="text/css">

    @import url("https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap");
    
    a{ 
    text-decoration: underline;
    color: inherit;
    font-weight: bold;
    color: #253342;
    }
    
    h1 {
        font-size: 65px;
        ' .
        $font .
        '
      }
    
    h2{
    font-size: 28px;
    font-weight: 900; 
    }
    
    p {
    font-weight: 100;
    }
    
    td {
    vertical-align: top;
    }
    
    #email {
    margin: auto;
    width: 600px;
    background-color: white;
    }
    
    button{
    font: inherit;
    background-color: #FF7A59;
    border: none;
    padding: 10px;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: 900; 
    color: white;
    border-radius: 5px; 
    box-shadow: 3px 3px #d94c53;
    }
    
    .subtle-link {
    font-size: 9px; 
    text-transform:uppercase; 
    letter-spacing: 1px;
    color: #CBD6E2;
    }
    
    </style>
    
    </head>
    
    <body bgcolor="#F5F8FA" style="width: 100%; margin: auto 0; padding:0; font-family:Lato, sans-serif; font-size:18px; color:#33475B; word-break:break-word">
    
    <! Banner --> 
    <table role="presentation" width="100%">
    <tr>
    
    <td bgcolor="#55a9e0" align="center" style="color: white;">
    
    <h1> Thank You! </h1>
    
    </td>
    </table>
    
    
    
    
    <! First Row --> 
    
    <table role="presentation" border="0" cellpadding="0" cellspacing="10px" style="padding: 30px 30px 30px 60px;">
    <tr>
    <td>
    <h2> This is your serial number for Photobooth : ' .
        $num .
        ' </h2>
    <p>
    Please present this code to the booth to proceed with picture taking. To get the pictures, please approach to Registration booth to recieve pictures to your Email. 
    </p>
    </td> 
    </tr>
    </table>
    <! Second Row --> 
    
    <table role="presentation" bgcolor="#EAF0F6" width="100%" >
    <tr>
    <td align="left" style="padding: 30px 30px;">
    <p style="color:#99ACC2"> Made by Lyco Tatierra @ <a href="https://discord.gg/dw9V2gQytW" style="color:#99ACC2"> princepines </a></p>    
    </td>
    </tr>
    </table> 
    </div>
    </body>
    </html>';
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "PHPMailer/src/Exception.php";
require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/SMTP.php";

$mail = new PHPMailer(true);
$name = $_POST["name"];
$email = $_POST["email"];
$optionPhoto = $_POST["option"];
$serial = mt_rand(000001, 999999);
$dateTime = date("Y-m-d H:i:s");
$frame = $_POST["frame"];
$pass = "L4dbcxz1937!";

// Database connection
$conn = new mysqli("kr.pines-ph.cf", "Informatics", "InformaticsNorthgate", "photobooth");
if ($conn->connect_error) {
    die("Connection Failed : " . $conn->connect_error);
} else {
    // create teabel if not exists
    $sql = "CREATE TABLE IF NOT EXISTS foundation_photobooth (
        dateTime VARCHAR(255) NOT NULL,
        serial INT(255) NOT NULL PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        optionPhoto VARCHAR(255) NOT NULL,
        frame VARCHAR(255) NOT NULL
    )";
    $exec = $conn->prepare($sql);
    $exec->execute();
    $exec->close();
    $stmt = $conn->prepare(
        "insert into foundation_photobooth (dateTime, serial, name, email, optionPhoto, frame) values (?, ?, ?, ?, ?, ?)"
    );
    $stmt->bind_param("sissss", $dateTime, $serial, $name, $email, $optionPhoto, $frame);
    $stmt->execute();
    mkdir("pictures/$serial", 0777, true);
    try {
        // Server setting for office365
        $mail->SMTPDebug = 0; // Enable verbose debug output
        $mail->isSMTP(); // Send using SMTP
        $mail->Host = "smtp.office365.com"; // Set the SMTP server to send through
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = "frizth_tatierra@informatics.edu.ph";
        $mail->Password = $pass;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port = 587; // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        $mail->isHTML(true); // Set email format to HTML
        // Recipients
        $mail->setFrom("frizth_tatierra@informatics.edu.ph", "Photobooth");
        $mail->addAddress($email); // Add a recipient
        $mail->Subject = "Thank You for Registering!";
        $mail->Body = onEmailSend($serial);
        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    $stmt->close();
    $conn->close();
}
?>
<html>
<head>
    <link rel="icon" type="image/x-icon" href="icon.ico">
    <title>Thank You! - Photobooth</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="styles.css" rel="stylesheet">
    <style type="text/css">

      @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
   
      a{ 
        text-decoration: underline;
        color: inherit;
        font-weight: bold;
        color: #253342;
      }
      
      h1 {
        font-size: 65px;
        font-family: 'Bebas Neue', sans-serif;
      }
      
        h2{
        font-size: 28px;
        font-weight: 900; 
      }
      
      p {
        font-weight: 100;
      }
      
      td {
        vertical-align: top;
        padding: 20px;
      }
      
      #email {
        margin: auto;
        width: 600px;
        background-color: white;
      }
      
      button{
        font: inherit;
        background-color: #FF7A59;
        border: none;
        padding: 10px;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: 900; 
        color: white;
        border-radius: 5px; 
        box-shadow: 3px 3px #d94c53;
      }
      
      .subtle-link {
        font-size: 9px; 
        text-transform:uppercase; 
        letter-spacing: 1px;
        color: #CBD6E2;
      }
      
    </style>
</head>
<body bgcolor="#F5F8FA" style="width: 100%; margin: auto 0; padding:0; font-family:Lato, sans-serif; font-size:18px; color:#33475B; word-break:break-word">
  
  <! Banner --> 
         <table role="presentation" width="100%">
            <tr>
         
              <td bgcolor="#55a9e0" align="center" style="color: white;">
                
                <h1> Thank You! </h1>
                
              </td>
        </table>

    <! First Row --> 
  <table role="presentation" border="0" cellpadding="0" cellspacing="10px" style="padding: 30px 30px 30px 60px;">
     <tr>
       <td>
        <h2> This is your serial number for Photobooth : <?php echo $serial; ?></h2>
            <p>
              Please present this code to the booth to proceed with picture taking. To get the pictures, please approach to Registration booth to recieve pictures to your Email. (This confirmation is sent to your email.)
            </p>
            <p><b><u>Please take a screenshot of this confirmation, you will need this later for downloading your photos, please aproach us on registration booth.</u></b></p>
          </td> 
          </tr>
                 </table>

        <! Footer --> 
  <table role="presentation" bgcolor="#EAF0F6" width="100%" >
      <tr>
          <td align="left" style="padding: 30px 30px;">
          <p style="color:#99ACC2"><img src="pines.png" width="25" height="25"> Made by Lyco Tatierra @ <a href="https://discord.gg/dw9V2gQytW" style="color:#99ACC2"> princepines </a></p>    
          </td>
          </tr>
      </table> 
      </div>
    </body>
</html>