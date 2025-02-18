<?php
session_start();
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nusantara Trip | Aplikasi Rekomendasi Wisata</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body style="margin-bottom:200px">
    
    <!--Header-->
    <?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>
    <!--Header ends-->

    <div id="content">
        <div id="bg" class=" ">
            <div class="container" style="padding-top:100px">
            <div class="jumbotron text-center">
            <h1>Nusantara Trip</h1>
            <p>We Recommend The Best Places</p>
            <a href="products.php" class="btn-primary btn-sm text-white">Booking Now</a>

            </div>
            </div>

        </div>
    </div>
    <div class="text-center h3">
        * Jobs Fill Your Pocket,Adventures Fill Your Soul *
    </div>
    <!--menu highlights start-->
 <div class="container pt-3">
        <div class="row text-center ">
            <div class="col-6 col-md-3 py-3">
                <a href="destination.php#jawa"> 
                    <img src="images/semeruuu.jpeg" class="img-fluid " alt="" style="border-radius:0.5rem">
                    <div class="h5 pt-3 font-weight-bolder">
                      Pulau Jawa
                   </div>
                </a>
            </div>
            <div class="col-6 col-md-3 py-3">
                <a href="destination.php#sumatra">
                    <img src="images/kerincii.jpeg" class="img-fluid zoom" alt="" style="border-radius:0.5rem" >
                     <div class="h5 pt-3 font-weight-bolder">
                        Pulau Sumatra
                     </div>
                </a>
            </div>
            <div class="col-6 col-md-3 py-3">
                <a href="destination.php#sulawesi">
                    <img src="images/latimojongg.jpeg" class="img-fluid   " alt="" style="border-radius:0.5rem">
                    <div class="h5 pt-3 font-weight-bolder">
                    Pulau Sulawesi
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 py-3">
                <a href="destination.php#papua">
                    <img src="images/jayawijaya.jpeg" class="img-fluid  " alt="" style="border-radius:0.5rem">
                    <div class="h5 pt-3 font-weight-bolder">
                    Pulau Papua
                    </div>
                    </div>
                </a>
            </div>
        </div>

    <!--menu highlights end-->
    <!--footer -->
    <?php include 'includes/footer.php'?>
    <!--footer end-->




</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
$(document).ready(function() {

if(window.location.href.indexOf('#login') != -1) {
  $('#login').modal('show');
}

});
</script>
<?php if (isset($_GET['error'])) {$z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
    
<?php if (isset($_GET['errorl'])) {$z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>




</html>