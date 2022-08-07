<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dispaly content</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="image.jfif">

 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
        /* .wrapperr{
            background-image:url(divo.jfif);
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-position: cover;
            width:100%;
            height:450px;
        } */
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    
    </script>
</head>
<body>
    <div class="wrapperr">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="ml-5 mt-5 mb-3 clearfix">
                        <h2 class="pull-left text-success">Data Details</h2>
                        <a href="user_insert.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "connect.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM Birth";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped" m-3>';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>ID</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Father</th>";

                                        echo "<th>Grand Father</th>";
                                        echo "<th>Gender</th>";
                                        echo "<th>Birth</th>";

                                        echo "<th>Country</th>";
                                        echo "<th>Region</th>";
                                        echo "<th>Zone</th>";

                                        echo "<th>Wereda</th>";
                                        echo "<th>Nationality</th>";
                                        echo "<th>Mather Full Name</th>";

                                        echo "<th>Mather Nationality</th>";
                                        echo "<th>Father Full Name</th>";
                                        echo "<th>Father Nationality</th>";

                                        echo "<th>Birth registration date</th>";
                                        echo "<th>Date of Certificate issued</th>";
                                        echo "<th>Registrar</th>";

                                        echo "<th>Agree</th>";
                                        echo "<th>Photo</th>";
                                        echo "<th>Operations</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['names'] . "</td>";
                                        echo "<td>" . $row['father_name'] . "</td>";
                                        echo "<td>" . $row['grand_father'] . "</td>";
                                        echo "<td>" . $row['gender'] . "</td>";
                                        echo "<td>" . $row['birth'] . "</td>";
                                        echo "<td>" . $row['country'] . "</td>";
                                        echo "<td>" . $row['region'] . "</td>";
                                        echo "<td>" . $row['zon'] . "</td>";
                                        echo "<td>" . $row['wereda'] . "</td>";
                                        echo "<td>" . $row['nationality'] . "</td>";
                                        echo "<td>" . $row['mother_full_name'] . "</td>";
                                        echo "<td>" . $row['mother_nationality'] . "</td>";
                                        echo "<td>" . $row['father_ful_name'] . "</td>";
                                        echo "<td>" . $row['father_nationality'] . "</td>";
                                        echo "<td>" . $row['date_of_birth_reg'] . "</td>";
                                        echo "<td>" . $row['date_of_certicate_issued'] . "</td>";
                                        echo "<td>" . $row['registerar'] . "</td>";
                                        echo "<td>" . $row['agree'] . "</td>";
                                        ?>
                                        <td><img src="<?php echo $row['photo'];?>" alt="photo here" width="100%" height="100%"> </td>
                                        <?php
                                        echo "<td>";
                                            echo '<a href="read.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="delete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    mysqli_close($conn);
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>