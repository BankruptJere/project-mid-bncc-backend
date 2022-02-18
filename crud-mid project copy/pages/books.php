<?php require_once '../php/db.php'; 
require_once ("../../crud-mid project/php/component.php");
require_once ("../../crud-mid project/php/operation.php");
?>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>See All Books | Musang Library</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>


<style>
      body {
        background-image: url('../images/blackscreen.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
background-size: 100% 100%;
      }
      </style>



<body>
    <!-- NAVBAR -->
    <?php require_once '../views/navbar.php'; ?>

    <!-- BOOK CONTENT -->
    <div class="container mt-5">
        <h4 style="color:white"> All Books</h4>
        <hr>
     <!-- BOOK CONTENT -->
     <div class="container">
        <div class="row">
        <div class="d-flex table-data">
                   <?php
                       $result = getData();
                       if($result){
                           while ($row = mysqli_fetch_assoc($result)){ ?>

                        <div class="col-md-3 mb-4">
                            <div class="col-md-12 book-content bg-light">
                                <h3 class="judul"><?= $row['book_name'] ?></h3>
                                <span class="badge bg-info mb-3">Author : <?= $row['book_author'] ?></span>
                                <span class="d-block">Year Published : <?= $row['book_year'] ?></span>
                                <span class="d-block">Length : <?= $row['book_page'] ?> pages</span>
                            </div>
                        </div>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                 
                   <?php
                           }
                       }
                   ?> 
        </div> 
        </div>
    </div>
    </div>

    <script src="../js/bootstrap.min.js"></script>
</body>



</html>