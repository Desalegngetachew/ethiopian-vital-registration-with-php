<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login validate</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <label for="email">email</label>
<input type="email" name="email" id="email">
<label for="pass">password</label>
<input type="password" name="pass" id="pass">
<input type="submit" value="sebmit" name="submit">

</form>

<?php
include "login.php";
if(isset($_POST['submit'])){
// $email = $_POST['email'];
// $pass = $_POST['pass'];
$select = "SELECT * FROM GET where email='$email' && pass='$pass'";
$resselect = $conn->query($select);
if($conn->num_rows == 1){
$row = $conn->fetch_assoc($resselect);
if($row['$email'] && $row['$pass']){
    $_SESSION['email'] = $row['email'];
    header("Location:form.php");
}



}
}

?>
</body>
</html>