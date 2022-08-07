<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crude opration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="image.jfif">
</head>
<body>
    <?php
include "connect.php";
if(isset($_POST['submitbirth'])){
$name = $_POST['name'];
$father = $_POST['father'];
$grand = $_POST['grand'];
$gender = $_POST['gender'];
$birth = $_POST['birth'];
$country = $_POST['country'];
$region = $_POST['region'];
$zon = $_POST['zon'];
$wereda = $_POST['wereda'];
$nationality = $_POST['nationality'];
$mother = $_POST['mother_full'];
$mother_nation = $_POST['mother_nation'];
$father_full = $_POST['father_full'];
$father_nation = $_POST['father_nation'];
$birthreg = $_POST['birth_reg'];
$certificat_issued = $_POST['certicate_issued'];
$registerar = $_POST['registerar'];
$agree = $_POST['agree'];
$photo = $_POST['photo'];
}

$insert = "INSERT INTO Birth(names,father_name,grand_father,gender,birth,country,region,zon,wereda,nationality,mother_full_name,mother_nationality,father_ful_name,father_nationality,date_of_birth_reg,date_of_certicate_issued,registerar,agree,photo) VALUES('$name','$father','$grand','$gender','$birth','$country','$region','$zon','$wereda','$nationality','$mother','$mother_nation','$father_full','$father_nation','$birthreg','$certificat_issued','$registerar','$agree','$photo')";
$res = $conn->query($insert);
if($res){
echo "Inserted successfully";
 header("location:b.php");
}


?>
   <!-- <form action="" method="post">
       <label for="name">Name</label>
       <input type="text" name="name" id="name" required>
       <label for="number">Father</label>
       <input type="text" name="father" id="father" required>

       <label for="name">Grand Father</label>
       <input type="text" name="grand" id="grand" required>
       <label for="number">Gender</label>
       <input type="text" name="gender" id="gender" required>

       <label for="name">Birth Date</label>
       <input type="text" name="name" id="name" required>
       <label for="number">Number</label>
       <input type="text" name="number" id="number" required>

       <label for="name">Name</label>
       <input type="text" name="name" id="name" required>
       <label for="number">Number</label>
       <input type="text" name="number" id="number" required>

       <label for="name">Name</label>
       <input type="text" name="name" id="name" required>
       <label for="number">Number</label>
       <input type="text" name="number" id="number" required>


       <label for="name">Name</label>
       <input type="text" name="name" id="name" required>
       <label for="number">Number</label>
       <input type="text" name="number" id="number" required>
       <input type="file" name="img_file">
       

       <label for="name">Name</label>
       <input type="text" name="name" id="name" required>
       <label for="number">Number</label>
       <input type="text" name="number" id="number" required>
       <input type="file" name="img_file">

       <label for="name">Name</label>
       <input type="text" name="name" id="name" required>
       <label for="number">Number</label>
       <input type="text" name="number" id="number" required>
       <input type="file" name="img_file">
       <button type="submit" name="s">submit</button>
   </form>  -->
   <?php
include "footer.html";
   ?>
</body>
</html>