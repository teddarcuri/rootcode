<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>

<!-- login form box -->
<form id="login-form" method="post" action="index.php" name="loginform">
    <center>    
    <img class="med-logo" src="<?php echo BASE_URL ?>assets/logo.png" alt=""><br />
    <label for="login_input_username">Username</label>
    <hr>
    <input id="login_input_username" class="login_input" type="text" name="user_name" required />
    
    <label for="login_input_password">Password</label>
    <hr>
    <input id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" required />

    <input id="login-submit" type="submit"  name="login" value="Log in" />
    <a class="register" href="register.php">Register New Account</a>

</form>


<script>

    $(function(){
        $("#login-form").fadeIn(2000);
    })
    
    $("#login-submit").click(function(){

        $(".med-logo").attr("src", "assets/ajax-loader.gif");

    });

</script>
