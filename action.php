<?php
$name = $_POST['name'];
$email = $_POST['email'];
$serial = "Info-" . mt_rand(000001, 999999);

// Database connection
$conn = new mysqli('localhost','root','','photobooth');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into photobooth_data (serial, name, email) values (?, ?, ?)");
    $stmt->bind_param("sss", $serial, $name, $email);
    $stmt->execute();
    mkdir("pictures/$serial", 0777, true);
    $stmt->close();
    $conn->close();
}
?>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="styles.css" rel="stylesheet">
</head>
<body class="padding">
    <h1 class="fw-bold">Thank you!</h1>
    <h2 class="display-5">Register Code: <?php echo $serial; ?></h2>
    <h3 class="">Please present this page to the registration area on photobooth</h3>
</body>