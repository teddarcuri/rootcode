<?php include "includes/header.php"; // HTML Header?>

	<div id="sidebar">
		<center>
			<img id="logo" src="<?php echo BASE_URL ?>assets/logo.png" alt="">
			<ul id="nav">
				<li><a href="#">&lt;?php?&gt;</a></li>
				<li><a href="#">javaScript()</a></li>
				<li><a href="#">$("jQuery")</a></li>
				<li><a href="#">&lt;!HTML&gt;</a></li>
				<li><a href="#">.Css</a></li>
			</ul>
		</center>
	</div><!-- Close Sidebar -->

	<div id="main-container">
		<div id="toolbar">

			<span class="title">Welcome, to the source.</span>

			<form action="">
				<input type="text" class="search" value="Search" onfocus="if(this.value == 'Search') { this.value = ''; }" onblur="if(this.value == '') {this.value = 'Search';}">
				<div class="react-circle"></div>
			</form>

		</div><!-- Close Toolbar -->
	
		<div id="viewer">
		
			<div class="wrapper">
				
				<a class="code">PHP | Login Class</a>
				<a class="code">Name Of Code</a>
				<a class="code">Name Of Code</a>
				<a class="code">Name Of Code</a>
				<a class="code">Name Of Code</a>
				<a class="code">Name Of Code</a>
				<a class="code">Name Of Code</a>
				<a class="code">Name Of Code</a>
				<a class="code">Name Of Code</a>
				<a class="code">Name Of Code</a>
				<a class="code">Name Of Code</a>
				<a class="code">Name Of Code</a>
				<a class="code">Name Of Code</a>
				<a class="code">Name Of Code</a>
				<a class="code">Name Of Code</a>
				<a class="code">Name Of Code</a>
				<a class="code">Name Of Code</a>
				<a class="code">Name Of Code</a>
				<a class="code">Name Of Code</a>
				<a class="code">Name Of Code</a>
				<a class="code">Name Of Code</a>
				<a class="code">Name Of Code</a>

			</div>

			


		</div><!-- Close Viewer -->

		<textarea id="code">
&lt;?php
 // Welcome to the Rootspring Code Library

 class sayHello {

	public $name;

	public __construct($name) {
		$this->name = $name;
		echo "Hey, {$this->name}! Welcome to Rootspring";
	}
 }

$welcome = new sayHello("cody");
?>
		</textarea> <!-- Close Code -->

	</div>

<?php include "includes/footer.php"; // HTML Header ?>

