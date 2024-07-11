<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tourismendation | Aplikasi rekomendasi wisata</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!--header -->
 <?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>
<!--header ends -->
<div class="container" style="margin-top:65px">
         <!--jumbutron start-->
        <div class="jumbotron text-center">
            <h1>Welcome to Nusantara Trip!</h1>
            <p>We have various destinations for you. No need to search, we have it all in one place</p>
        </div>
        <!--jumbutron ends-->
        <!--breadcrumb start-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Destination</li>
            </ol>
        </nav>
        <!--breadcrumb end-->
    <hr/>
    <!--menu list-->
    <div class="row text-center" id="jawa">
        <div class="col-md-3 col-6 py-2">
            <div class="jawa">
                <img src="images/semeru.jpeg" alt="" class="img-fluid pb-1" >
                <div class="figure-caption">
                    <h5>Gunung Semeru</h5>
                    <h7>Malang,Jawa Timur</h7>
                    <h6>Price :Rp 700.000/pax</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-primary  text-white ">Add To Booking List</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_destination(1)) {
                     echo '<p><a href="#" class="btn btn-primary  text-white" disabled>Added to cart</a></p>';
                    } else {
                        ?>
                        <p><a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary  text-white">Add To Booking List</a><p>
                        <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="jawa">
                <img src="images/Lawu.jpg" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h5>Gunung Lawu</h5>
                    <h7>Karanganyar,Jawa Tengah</h7>
                    <h6>Price :Rp 850.000/pax</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-primary  text-white ">Add To Booking List</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_destination(2)) {
                        echo '<p><a href="#" class="btn btn-primary  text-white" disabled>Added to cart</a></p>';
                         } else {
                        ?>
                        <p><a href="cart-add.php?id=2" name="add" value="add" class="btn btn-primary  text-white">Add To Booking List</a></p>
                        <?php
                         }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="jawa">
                <img src="images/Argopuro.jpg" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h5>Gunung Argopuro</h5>
                    <h7>Probolingo,Jawa Timur</h7>
                    <h6>Price :Rp 950.000/pax</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-primary  text-white ">Add To Booking List</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_destination(3)) {
                        echo '<p><a href="#" class="btn btn-primary  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=3" name="add" value="add" class="btn btn-primary  text-white">Add To Booking List</a></p>
                        <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="jawa">
                <img src="images/Ciremai.jpg" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h5>Gunung Ciremai</h5>
                    <h7>Kuningan,Jawa Barat</h7>
                    <h6>Price :Rp 600.000/pax</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-primary  text-white ">Add To Booking List</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_destination(4)) {
                        echo '<p><a href="#" class="btn btn-primary  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        </p><a href="cart-add.php?id=4" name="add" value="add" class="btn btn-primary  text-white">Add To Booking List</a></p>
                        <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center" id="sumatra">
            <div class="col-md-3 col-6 py-3" >
                <div class="card">
                    <img src="images/kerinci.jpeg" alt="" class="img-fluid pb-1"  >
                    <div class="figure-caption">
                    <h5>Gunung kerinci</h5>
                    <h7>Jambi,Sumatra Barat</h7>
                    <h6>Price :Rp 1.200.000/pax</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-primary  text-white ">Add To Booking List</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_destination(5)) {
                        echo '<p><a href="#" class="btn btn-primary  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=5" name="add" value="add" class="btn btn-primary  text-white">Add To Booking List</a></p>
                        <?php
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/dempo.jpg" alt="" class="img-fluid pb-1" >
                    <div class="figure-caption">
                    <h5>Gunung Dempo</h5>
                    <h7>Bengkulu,Sumatra Selatan</h7>
                    <h6>Price :Rp 1.100.000/pax</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-primary  text-white ">Add To Booking List</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_destination(6)) {
                        echo '<p><a href="#" class="btn btn-primary  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=6" name="add" value="add" class="btn btn-primary  text-white">Add To Booking List</a></p>
                        <?php
                    }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/marapi.jpg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h5>Gunung Marapi</h5>
                        <h7>Tanah Datar,Sumatra Barat</h7>
                        <h6>Price :Rp 1.150.000/pax</h6>
                        <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-primary  text-white ">Add To Booking List</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_destination(7)) {
                    echo '<p><a href="#" class="btn btn-primary  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p><a href="cart-add.php?id=7" name="add" value="add" class="btn btn-primary  text-white">Add To Booking List</a></p>
                    <?php
                    }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3" >
                <div class="card">
                    <img src="images/singgalang.jpg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h5>Gunung Singgalang</h5>
                        <h7>Tanah Datar,Sumatra Barat</h7>
                        <h6>Price :Rp 1.250.000/pax</h6>
                        <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-primary  text-white ">Add To Booking List</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_destination(8)) {
                        echo '<p><a href="#" class="btn btn-primary  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=8" name="add" value="add" class="btn btn-primary  text-white">Add To Booking List</a></p>
                        <?php
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center" id="sulawesi" >
                <div class="col-md-3 col-6 py-3">
                    <div class="card">
                        <img src="images/latimonjong.jpeg" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                            <h5>Gunung Latimojong</h5>
                            <h7>Luwu,Sulawesi Selatan</h7>
                            <h6>Price :Rp 1.500.000/pax</h6>
                            <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-primary  text-white ">Add To Booking List</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_destination(9)) {
                    echo '<p><a href="#" class="btn btn-primary  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p><a href="cart-add.php?id=9" name="add" value="add" class="btn btn-primary  text-white">Add To Booking List</a></p>
                    <?php
                    }
                    }
                    ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-3">
                    <div class="card">
                        <img src="images/balease.jpg" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                            <h5>Gunung Balease</h5>
                            <h7>Buyu Balease,Sulawesi Selatan</h7>
                            <h6>Price :Rp 1.600.000/pax</h6>
                            <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-primary  text-white ">Add To Booking List</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_destination(10)) {
                    echo '<p><a href="#" class="btn btn-primary  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                     <p><a href="cart-add.php?id=10" name="add" value="add" class="btn btn-primary  text-white">Add To Booking List</a></p>
                     <?php
                    }
                    }
                    ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-3">
                    <div class="card">
                        <img src="images/gandangdewata.jpg" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                            <h5>Gunung Gandangdewata</h5>
                            <h7>Mamasa,Sulawesi Barat</h7>
                            <h6>Price :Rp 1.700.000/pax</h6>
                            <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-primary  text-white ">Add To Booking List</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_destination(11)) {
                    echo '<p><a href="#" class="btn btn-primary  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p><a href="cart-add.php?id=11" name="add" value="add" class="btn btn-primary  text-white">Add To Booking List</a></p>
                    <?php
                    }
                    }
                    ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-3" >
                    <div class="card">
                        <img src="images/rantekombola.jpg" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                        <h5>Gunung Rantekombola</h5>
                        <h7>Toraja,Sulawesi Selatan</h7>
                    <h6>Price :Rp 1.800.000/pax</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-primary  text-white ">Add To Booking List</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_destination(12)) {
                    echo '<p><a href="#" class="btn btn-primary  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    </p><a href="cart-add.php?id=12" name="add" value="add" class="btn btn-primary  text-white">Add To Booking List</a></p>
                    <?php
                    }
                    }
                    ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center" id="papua">
                    <div class="col-md-3 col-6 py-3" >
                        <div class="card">
                            <img src="images/puncakjayawijaya.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h5>Gunung Jayawijaya</h5>
                                <h7>Papua</h7>
                                <h6>Price :Rp 2.500.000/pax</h6>
                                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-primary  text-white ">Add To Booking List</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_destination(13)) {
                    echo '<p><a href="#" class="btn btn-primary  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p> <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-primary  text-white">Add To Booking List</a></p>
                    <?php
                    }
                    }
                    ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="images/trikora.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h5>Gunung Trikora</h5>
                                <h7>Papua Barat</h7>
                                <h6>Price :Rp 2.400.000/pax</h6>
                                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-primary  text-white ">Add To Booking List</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_destination(14)) {
                    echo '<p><a href="#" class="btn btn-primary  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    </p><a href="cart-add.php?id=14" name="add" value="add" class="btn btn-primary  text-white">Add To Booking List</a></p>
                    <?php
                    }
                    }
                    ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="images/Pilimsit.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h5>Gunung Pilimsit</h5>
                                <h7>Papua Tengah</h7>
                                <h6>Price :Rp 2.450.000/pax</h6>
                                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-primary  text-white ">Add To Booking List</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_destination(15)) {
                    echo '<p><a href="#" class="btn btn-primary  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    </p><a href="cart-add.php?id=15" name="add" value="add" class="btn btn-primary  text-white">Add To Booking List</a></p>
                   <?php
                    }
                    }
                    ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="images/Yaramamafaka.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h5>Gunung Yaramamafaka</h5>
                                <h7>Papua New Guinea</h7>
                                <h6>Price :Rp 2.350.000/pax</h6>
                                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-primary  text-white ">Add To Booking List</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_destination(16)) {
                    echo '<p><a href="#" class="btn btn-primary  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p> <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-primary  text-white">Add To Booking List</a></p>
                    <?php
                    }
                    }
                    ?>
                            </div>
                        </div>
                    </div>
                </div>
      </div>
      <!--menu list ends-->
      <!-- footer-->
        <?php include 'includes/footer.php'?>
      <!--footer ends-->
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
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