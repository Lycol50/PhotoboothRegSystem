<html>
<head>
    <link rel="icon" type="image/x-icon" href="icon.ico">
    <title>Photobooth Download</title>
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
                <img src="logo.png" style="width: 250px">
                <h1> Photobooth Download </h1>
                
              </td>
        </table>
  
    <! First Row --> 
  
  <table role="presentation" border="0" cellpadding="0" cellspacing="10px" style="padding: 30px 30px 30px 60px;">
     <tr>
       <td>
        <h2>Download your photos here!</h2>
            <form action="download.php" method="post">
                <div class="mb-3">    
                    <label for="serial" class="form-label">Insert Serial Code:</label>
                    <input type="text" class="form-control" name="serial" id="serial" placeholder="Enter your serial" style="width: 100%" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
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


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhotoSender</title>
</head>
<body>
    <h1>Mass PhotoSender</h1>
    // create form with serial number input
    <form action="action.php" method="post">
        <label for="serial">Serial Number:</label>
        <input type="text" id="serial" name="serial">
        <input type="submit" value="Submit">
    </form>
</body>
</html> -->