<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vital reg</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="icon" href="image.jfif">
<link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.caa">

<body>
    <?php
    include "nav.html";
    ?>
    <style>
    .card-body {
        padding: 5px;
        margin: 15px;
        box-shadow: 2px 1px 22px black;
    }

    .container.d-flex {
        padding: 5px;
        margin: 5px;
        width: 80%;
        justify-content: space-around;
        align-items: center;
        flex-wrap: wrap;

    }

    .bg-image.card.shadow-1-strong {
        width: 100%;
        height: 100vh;
    }

    .btn.btn-outline-light {
        border-radius: 50%;
        padding: 25px;
        margin: 25px;
        color: white;
    }
    </style>



    <!-- Card -->
    <div class="bg-image card shadow-1-strong" style="background-image: url(git.jpg); background-attachment: fixed;">

        <div class="card-body text-white">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the
                card's content.
            </p>
            <a href="b.php" class="btn btn-outline-success">b</a>
            <a href="mog.php" class="btn btn-outline-success">mog</a>
            <a href="mar.php" class="btn btn-outline-success">marrage</a>
            <a href="div.php" class="btn btn-outline-success">div</a>
            <a href="deat.php" class="btn btn-outline-success">deat</a>
        </div>
    </div>
    <!-- Card -->

    <div class="container d-flex">
        <div class="card" style="width: 18rem;">
            <img src="./image.jfif" class="card-img-top" alt="..." width=100% height="100px">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="image.jfif" class="card-img-top" alt="..." width="100%" height="100px">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="image.jfif" class="card-img-top" alt="..." width="100%" height="100px">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="image.jfif" class="card-img-top" alt="..." width="100%" height="100px">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="image.jfif" class="card-img-top" alt="..." width="100%" height="100px">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <?php
    include "footer.html";
    ?>
    <script src="bootstrap-5.0.2-dist/js/bootstrap.js"></script>
</body>

</html>