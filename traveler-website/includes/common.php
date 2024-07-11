<?php
$con=mysqli_connect("localhost","root","","traveler");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
