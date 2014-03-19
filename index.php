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
				<li><a href="#">@Sass</a></li>
			</ul>
		</center>
	</div><!-- Close Sidebar -->

	<div id="main-container">
		<div id="toolbar">

			<div id="toolbox">
				<ul class="tools">
					<a href="#"><li>Add some code.</li></a>
					<a href="#"><li>Edit some code.</li></a>
					<a href="#"><li>Delete some code.</li></a>
				</ul>
			</div>
			
			<div id="dashboard">
				<span class="welcome"><img src="assets/users/tedd.jpg" alt="">Welcome, Tedd!</span>
				<div class="arrow"></div>
			</div>

			<form id="search-bar" action="">
				<input type="text" class="search" value="Search" onfocus="if(this.value == 'Search') { this.value = ''; }" onblur="if(this.value == '') {this.value = 'Search';}">
				<div class="react-circle"></div>
			</form>


		</div><!-- Close Toolbar -->
	
		<div id="viewer">
		
			<div class="wrapper">
				<h2>PHP</h2>
				<hr>
				<br />
				<?php
					for ($i ; $i <10 ; $i++) {
						echo "<a class='code'>PHP | Login Class {$i}</a>\n";
					}
				?>
			</div>
		</div><!-- Close Viewer -->

		<textarea id="code" style="min-height: 75px;">
&lt;?php
// Welcome to the Rootspring Code Library

// This is a place where our developers can share commonly used code

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

