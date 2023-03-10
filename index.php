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
                <img src="logo.png" style="width: 250px">
                <h1> Photobooth</h1>
                
              </td>
        </table>
  
  
  
  
    <! First Row --> 
  
  <table role="presentation" border="0" cellpadding="0" cellspacing="10px" style="padding: 30px 30px 30px 60px;">
     <tr>
       <td>
        <h2>Please fill up this form</h2>
        <p class="form-text">Payment first before taking picture.</p>
            <form action="action.php" method="post">
                <div class="mb-3">    
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" style="width: 100%" required>
                </div>
                <div class="mb-3">  
                    <label for="name" class="form-label">Active Email:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" style="width: 100%" required>
                </div>
                <div class="mb-3">  
                  <p class="form-label">Choose your option:</p>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" id="1shot" name="option" value="1shot">
                    <label class="form-check-label form-label" for="option">1 Shot : 10 Pesos (with frame and props)</label></div>
                  <div class="form-check">  
                    <input class="form-check-input" type="radio" id="2shot" name="option" value="2shot">
                    <label class="form-check-label form-label" for="option">2 Shot : 20 Pesos (with frame and props)</label></div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" id="4shot" name="option" value="4shot">
                    <label class="form-check-label form-label" for="option">4 Shot : 50 Pesos (with frame and props)</label></div>
                </div>
                <div class="mb-3">  
                  <p class="form-label">Choose your frame:</p>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" id="single" name="frame" value="single">
                    <img class="form-check-label form-label" for="frame" src="single-frame.png" style="width: 100px;"></div>
                  <div class="form-check">  
                    <input class="form-check-input" type="radio" id="fullframe" name="frame" value="fullframe">
                    <img class="form-check-label form-label" for="frame" src="full-frame.png" style="width: 100px;"></div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" id="4frame" name="frame" value="4frame">
                    <img class="form-check-label form-label" for="frame" src="four-full-frame.png" style="width: 100px;"></div>
                </div>
                <p class="form-text">Payment first before taking picture.</p>
                <button type="submit" class="btn btn-primary">Submit</button>
                <br>
                <br>
                <h3><b>Go here to download your photos:</b></h3>
                <a href="getphotos.php"><button type="button" class="btn btn-primary">Download Page Here!</button></a>
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
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="styles.css" rel="stylesheet">
</head>
<body class="padding">
    <h1 class="display-5 fw-bold">Photobooth</h1>
    <p class="col-md-8 fs-4">Please fill up this form.</p>
    <form action="action.php" method="post">
    <div class="mb-3">    
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" placeholder="Enter your name" required>
    </div>
    <div class="mb-3">  
        <label for="email">Informatics Email:</label>
        <input type="email" name="email" id="email" placeholder="Enter your email" required>
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</body>
</html> -->