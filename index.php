<!DOCTYPE html>
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
</html>