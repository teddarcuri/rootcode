<?php 
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

// if we are already logged in here:
if ($login->isUserLoggedIn() == true) {
    header("Location: index.php");
} 

include "includes/config.php";
include "includes/header.php"; // HTML Header

?>

<form id="login-form" action="" method="post">
	<center>	
	<img class="med-logo" src="<?php echo BASE_URL ?>assets/logo.png" alt=""><br />
	<label for="username">Username</label>
	<hr>
	<input name="username" type="text" value="Username"><br />
	<label for="password">Password</label>
	<hr>
	<input name="password" type="password" value="Password"><br />
	<input name="login-submit"  id="login-button" type="submit"><br />
	</center>
</form>

<script>

	$(function(){
		$("#login-form").fadeIn(2000);
	})
	
	$("#login-form").click(function(){

		$(".med-logo").attr("src", "assets/ajax-loader.gif");

		$("#login-form").delay(2000).animate({'margin-top': "-=2000"}, 2000, function(){
			$("#login-form").hide();
		});

	});

</script>

<?php include "includes/footer.php"; // HTML Header ?>
