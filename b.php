<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>birth reg</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="image.jfif">
</head>
<style>
.container.d-flex {
    padding: 15px;
    margin: auto;
    flex-wrap: wrap;
    width: 100%;
    align-items: center;
}

.mb-3 {
    margin: 7px;
}

img {
    align-items: center;
    border-radius: 50%;
    width: 150px;
    height: 160px;

}

body {
    background-image: url(divo.jfif);
    background-attachment: fixed;
    background-repeat: no-repeat;

}
</style>

<body>
    <?php
    include "connect.php";
    include "nav.html";
    ?>
    <?php
    if (isset($_POST['submitphoto'])) {
        $img = $_POST['photo'];
    }

    ?>


    <img src="<?php echo "$img" ?>" alt="insert photo here" class="imag">

    <form action="" method="post" class="container">
        <div class="mb-3">

            <label for="exampleInputEmail1" class="form-label">Photo</label>
            <input type="file" name="photo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <input type="submit" name="submitphoto" value="save photo">
    </form>


    <form method="post" action="user_insert.php" class="container d-flex">
        <label for="exampleInputEmail1" class="form-label">Photo</label>
        <input type="file" name="photo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Father Name</label>
            <input type="text" name="father" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Grand Father Name</label>
            <input type="text" name="grand" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="genderid">Gender</label>
            <div id="genderid">
                <label for="male">Male</label>
                <input type="radio" id="male" value="Male" name="gender">
                <label for="female">Female</label>
                <input type="radio" id="female" value="Female" name="gender">
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Birth Date</label>
            <input type="date" name="birth" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">place/country of birth</label>
            <input type="text" name="country" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Region/city Adminstration</label>
            <input type="text" name="region" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Zone/City Adminstrarion</label>
            <input type="text" name="zon" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Wereda/Special Wereda</label>
            <input type="text" name="wereda" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nationality</label>
            <input type="text" name="nationality" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Mother's Full Name</label>
            <input type="text" name="mother_full" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mother's Nationality</label>
            <input type="text" name="mother_nation" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Father's Full Name</label>
            <input type="text" name="father_full" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Father's Nationality</label>
            <input type="text" name="father_nation" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Date of Birth Registration</label>
            <input type="date" name="birth_reg" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Date of Certificate issued</label>
            <input type="date" name="certicate_issued" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Full Name of Civil Registerar</label>
            <input type="text" name="registerar" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" placeholder="optional">
        </div>
        <br>
        <label for="agree">I agree for the registration</label>
        <input type="checkbox" name="agree" id="agree" value="agree">
        <button type="submit" class="btn btn-primary" name="submitbirth">Submit</button>
    </form>
    <?php
    include "footer.html";
    ?>
</body>

</html>