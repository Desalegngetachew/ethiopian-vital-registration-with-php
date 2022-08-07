<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
</head>
<body>
    <?php
    
    $conn = new mysqli("localhost","root","","GET");
    if(!$conn){
        echo "connection not created";
    }
    // $db = "CREATE DATABASE GET";
    // $res = $conn->query($db);
    // if($res){
    //     echo "database created successfully";
    // }
// $tb = "CREATE TABLE GET(email varchar(30),pass varchar(30)) ";
// if($conn->query($tb)){
//     echo "table created";
// }
if(isset($_POST['submit'])){
$email = $_POST['email'];
$pass = $_POST['pass'];

$insert = "INSERT INTO GET(email,pass) VALUES('$email','$pass')";
$result = $conn->query($insert);
if($result){
    echo "inserted successfully";
    header(refresh 1,url:form.php);
}
}

$select = "SELECT email ,pass FROM GET where email="$email",pass="$pass";
$resselect = $conn->query($select);
if($resselect){
    echo "login successfull";
}
?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <label for="email">email</label>
<input type="email" name="email" id="email">
<label for="pass">password</label>
<input type="password" name="pass" id="pass">
<input type="submit" value="sebmit" name="submit">

</form>

</body>
</html>