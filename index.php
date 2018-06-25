<?php

$page= $_GET['page'];

if($page=='hawaii') {
    include_once("pages/places/hawaii/hawaii.php");

} else if($page=='boracay') {
    include_once("pages/places/boracay/boracay.php");

} else if($page=='manila') {
    include_once("pages/places/manila/manila.php");

} else if($page=='registration') {
    include_once("pages/forms/registration.php");

} else {
    // include_once("pages/places/hawaii/hawaii.php");
    include_once("pages/places/boracay/boracay.php");
    // include_once("pages/places/manila/manila.php");
   // include_once("pages/forms/registration.php");
}
?>