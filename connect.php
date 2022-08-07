<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="image.jfif">
</head>
<body>
    <?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = 'Vital_Records';

$conn = new mysqli($server,$user,$pass,$db);
if(!$conn){
    echo "error while connection";
}
// $db = "CREATE DATABASE Vital_Records";
// $res = mysqli_query($conn,$db);
// if($res){
//     echo "database created successfully";
// }
// $tb = "CREATE TABLE Birth(
// id int AUTO_INCREMENT primary key,
// names varchar(30) not null,
// father_name varchar(30) not null,
// grand_father varchar(30) not null,
// gender varchar(30) not null,
// birth TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP not null,
// country varchar(30) not null,
// region varchar(30) not null,
// zon varchar(30) not null,
// wereda varchar(30) not null,
// nationality varchar(30) not null,
// mother_full_name varchar(30) not null,
// mother_nationality varchar(30) not null,
// father_ful_name varchar(30) not null,
// father_nationality varchar(30) not null,
// date_of_birth_reg TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP not null,
// date_of_certicate_issued TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP not null,
// registerar varchar(30) not null,
// agree varchar(30) not null,
// photo varchar(255) not null)";

// if ($conn->query($tb) === TRUE) {
//     echo "Table Birth created successfully";
//   } else {
//     echo "Error creating table: " . $conn->error;
//   }
  
//   $conn->close();

?>
</body>
</html>