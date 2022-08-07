<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>photo update</title>
    <link rel="stylesheet" href="photo.css">
</head>

<body>
    <?php include "connect.php";
    if(isset($_POST['sub'])){
        $img = $_POST['img'];
        $nam = $_POST['names'];
        echo "$nam";
    }
    
    ?>


    <img src="<?php echo "$img"?>" alt="photo here" class="imag">

    <form action="" method="post">
        <input type="file" name="img">
        <label for="name">Name</label>
        <input type="text" name="names">
        <input type="submit" name = "sub" value="submit">
    </form>
</body>
</html>