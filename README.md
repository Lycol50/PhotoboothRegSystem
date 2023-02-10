# PhotoboothRegSystem
Registration System for Valentines Photobooth for Informatics College Northgate

1. Change the mysql ip/hostname, username and password, and database on action.php
```php
// Database connection
$conn = new mysqli('iporhostname','usernamehere','passwordhere','databasenamehere');
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
```
2. Create a table called photobooth_data and columns : serial, name and, email.
3. Start using the webpage.
