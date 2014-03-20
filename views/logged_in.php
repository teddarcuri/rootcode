<div id="sidebar">
	<?php include "includes/sidebar.php" ?>
</div><!-- Close Sidebar -->

<div id="main-container">

	<div id="toolbar">
		
		<!-- User Toolbox | CRUD, Themes, Etc... -->
		<div id="toolbox">
			<ul class="tools">
				<a class="theme" id="jungle-toggle"><li>Jungle Viewport</li></a>
				<a  class="theme" id="sleek-toggle"><li>Sleek Viewport</li></a>
				<a href="#"><li>Add some code.</li></a>
				<a href="index.php?logout"><li>Logout</li></a>
			</ul>
		</div>
		
		<!-- User Dashboard | Welcome message and dropdown for toolbox -->
		<div id="dashboard">
			<span class="welcome"><img src="assets/users/tedd.jpg" alt="">Welcome, <?php echo ucfirst($_SESSION['user_name']) ?>!</span>
			<div class="arrow"></div>
		</div>

		<!-- AJAX Search Bar -->
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
					echo "<a class='code'>Login Class {$i} and stuff or whatever</a>\n";
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

</div> <!-- Close Main Container -->

