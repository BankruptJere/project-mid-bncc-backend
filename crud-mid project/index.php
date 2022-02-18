<?php

require_once ("../crud-mid project/php/component.php");
require_once ("../crud-mid project/php/operation.php");
?>

<!doctype html>
<html lang="en">


<style>
      body {
        background-image: url('images/blackscreen.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
background-size: 100% 100%;
      }
      </style>
      
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage Book | Musang Library</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>



<body>

<?php require_once 'views/navbar.php'; ?>

    <!-- BANNER -->
    <div class="container bg-light banner">
        <h1>Welcome to Musang Library</h1>
        <p class="mb-4">An exemplary display of our literary collections, now available on your computer!</p>
        <a href="http://localhost/crud-mid project/pages/books.php" class="btn btn-primary">Explore Book</a>
    </div>


  
    <!-- BOOK CONTENT -->
    <div class="container">
        <div class="row">
        <h1 style="color:white"> Books Available </h1>
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
                   <?php
                           }
                       }
                   ?> 
        </div>

            
        </div>
    </div>


            <!-- FOOTER -->
    <?php require_once 'views/footer.php'; ?>

    </div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="../crud/php/main2.js"></script>
</body>
</html>