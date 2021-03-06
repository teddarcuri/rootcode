<?php 

include "includes/config.php";
include "includes/header.php"; // HTML Header

// checking for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once("includes/password_compatibility_library.php");
}

// include the configs / constants for the database connection
require_once("includes/db.php");

// load the login class
require_once("includes/login.php");

// create a login object. when this object is created, it will do all login/logout stuff automatically
$login = new Login();

// if we are logged in here:
if ($login->isUserLoggedIn() == true) {
    include("views/logged_in.php");
} else {
// Not logged in
    include("views/not_logged_in.php");
}

include "includes/footer.php"; // HTML Footer

?>


