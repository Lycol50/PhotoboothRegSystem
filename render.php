<html>
<head>
    <link rel="icon" type="image/x-icon" href="icon.ico">
    <title>Photobooth Registration</title>
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
        font-family: 'Bebas Neue', cursive;
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
                
                <h1> PhotoSender </h1>
                
              </td>
        </table>
  <?php
  require "PHPMailer/src/Exception.php";
  require "PHPMailer/src/PHPMailer.php";
  require "PHPMailer/src/SMTP.php";
  require "vendor/autoload.php";

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  use function Amp\Promise\timeout;
  $async = Amp\ReactAdapter\ReactAdapter::get();

  function onEmailSend(string $num)
  {
      $font = "font-family: 'Bebas Neue', cursive;";
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
    
    <td bgcolor="#C41E3A" align="center" style="color: white;">
    
    <h1> Thank You! </h1>
    
    </td>
    </table>
    
    
    
    
    <! First Row --> 
    
    <table role="presentation" border="0" cellpadding="0" cellspacing="10px" style="padding: 30px 30px 30px 60px;">
    <tr>
    <td>
    <h2> Please check attached photos below. </h2>
    <p>
    For Reference, This is your serial number for Photobooth : ' .
          $num .
          '. Thank you for participating in our event.
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

  $async->addTimer(1, function () {
      $pass = ""; // password for smtp
      // get serial number from db
      $serial = $_POST["serial"];
      // connect to db
      $conn = new mysqli("address", "username", "password", "database"); // change to your db
      if ($conn->connect_error) {
          die("Connection Failed : " . $conn->connect_error);
      } else {
          // get email from db
          $stmt = $conn->prepare(
              "select email from photobooth_data where serial = ?"
          );
          $stmt->bind_param("s", $serial);
          $stmt->execute();
          $stmt_result = $stmt->get_result();
          if ($stmt_result->num_rows > 0) {
              $data = $stmt_result->fetch_assoc();
              $email = $data["email"];

              $mail = new PHPMailer(true);
              $mail->isSMTP();
              $mail->Host = ""; // smtp server address
              $mail->SMTPAuth = true;
              $mail->Username = ""; // smtp username/email
              $mail->Password = $pass;
              $mail->SMTPSecure = "tls";
              $mail->Port = 587;
              $mail->setFrom("email", "Photobooth"); // email here and set name as
              $mail->addAddress($email);
              $mail->isHTML(true);
              // get all photos from folder
              $photos = glob("pictures/$serial/*");
              // create a new mail
              $mail->Subject = "Photobooth Pictures";
              $mail->Body = onEmailSend($serial);
              // add all photos as attachment
              foreach ($photos as $photo) {
                  $mail->addAttachment($photo);
              }
              $mail->send();
          }
          $stmt->close();
          $conn->close();
      }
  });
  echo '<! First Row --> 
      <table role="presentation" border="0" cellpadding="0" cellspacing="10px" style="padding: 30px 30px 30px 60px;">
         <tr>
           <td>
            <h2>Photos are on their way! You can now go back.</h2>
            <div class="mb-3">
            <a href="http://us.pines-ph.cf/photobooth/sendphoto.php"><button class="btn btn-primary">Go Back</button></a>
            </div>
              </td> 
              </tr>
      </table>';
  $async->run();
  ?>

  <! Footer --> 
  <table role="presentation" bgcolor="#EAF0F6" width="100%" >
      <tr>
          <td align="left" style="padding: 30px 30px;">
          <p style="color:#99ACC2"><img src="pines.png" width="25" height="25"> Made by Lyco Tatierra @ <a href="https://discord.gg/dw9V2gQytW" style="color:#99ACC2"> princepines </a></p>    
          </td>
          </tr>
      </table> 
    </body>
</html>