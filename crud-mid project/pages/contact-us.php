<?php require_once '../../crud-mid project/php/db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<style>
      body {
        background-image: url('../images/blackscreen.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
background-size: 100% 100%;
      }
      </style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Musang Library</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- NAVBAR -->
    <?php require_once '../views/navbar.php'; ?>

    <!-- CONTACT BANNER -->
    <div class="container bg-light banner">
        <h1>Feel Free to Contact Us</h1>
        <p class="mb-4">Call us if anything goes wrong, or if you want to submit a book!</p>
        <a href="#" class="btn btn-success">Whatsapp Call</a>
    </div>

    <!-- BOOK CONTENT -->
    <div class="container">
        <div class="col-md-5 py-3">
            <form>
                <div class="row" style="color:white">
                    <div class="form-group col-md-6">
                        <label for="">Email</label>
                        <input type="email" class="form-control" placeholder="test email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Nama Lengkap</label>
                        <input type="text" class="form-control" placeholder="test nama">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">Pesan / Keluhan</label>
                        <textarea class="form-control" placeholder="test pesan" rows="5"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-sm">Send Now</button>
            </form>
        </div>
    </div>

        <!-- NAVBAR -->
        <?php require_once '../views/footer.php'; ?>

    <script src="../js/bootstrap.min.js"></script>
</body>

</html>