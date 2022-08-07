<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update recordes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="image.jfif">
</head>
<body>
    <?php 
    include "connect.php";
    
$select = "select * from CRUDE_TABLE";
$res = mysqli_query($conn,$select);
if($res){
while($row = mysqli_fetch_array($res)){
$name =  $row['Email'];
$id = $row['id'];
}
if(isset($_POST['submit'])){
    $email = $_POST['name'];
    $id1 = $_POST['number'];
}
// $update = "UPDATE CRUDE_TABLE SET Email = '$email' , id='$id'";
// $resU = mysqli_query($conn,$resU);
// if($resU){
//     echo "updated successfully";
// }
}
?>
 <form action="" method="post">
       <label for="name">Name</label>
       <input type="text" name="name" id="name" value="<?php echo $name?>">
       <label for="number">Number</label>
       <input type="text" name="number" id="number" value="<?php echo $id?>" >
       <button type="submit" name="submit">submit</button>
   </form> 
</body>
</html>