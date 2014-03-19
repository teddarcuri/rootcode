<?php include "includes/header.php"; // HTML Header?>

	<div id="sidebar">
		<?php include "includes/sidebar.php" ?>
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
			<h2>PHP</h2>
			<hr>		
			<div class="wrapper">

				<?php
					for ($i ; $i < 9 ; $i++) {
						echo "<a class='code'>Login Class {$i}</a>\n";
					}
				?>
			</div>


			<h2>HTML</h2>	
			<hr>	
			<div class="wrapper">
				<?php
					for ($r ; $r < 12 ; $r++) {
						echo "<a class='code'>Login Class {$r}</a>\n";
					}
				?>
			</div>

			<h2>Javascript</h2>	
			<hr>	
			<div class="wrapper">
				<?php
					for ($f ; $f < 12 ; $f++) {
						echo "<a class='code'>Login Class {$f}</a>\n";
					}
				?>
			</div>

			<h2>JQuery</h2>	
			<hr>	
			<div class="wrapper">
				<?php
					for ($t ; $t < 12 ; $t++) {
						echo "<a class='code'>Login Class {$t}</a>\n";
					}
				?>
			</div>


		</div><!-- Close Viewer -->

		<!-- Text Editor Start -->
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

