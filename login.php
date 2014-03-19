<?php 

	if( isset($_POST['login-submit']) ) {

		echo $_POST['username'];
		echo $_POST['password'];

		header("Location: /index.php");
	}

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
