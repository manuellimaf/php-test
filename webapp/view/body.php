<?php 
	include "tests.php";  
	
	$name = "Manuel Lima";

	define("CHAR_1", "A");
	define("CHAR_2", "B");
?>

	<body>
		<h1><?php echo $name; ?></h1>
		<br/>
		<?php 
			$valores = array("Manuel", "Lima", "Fabiani");
			print_array($valores);
		?>

		<br/>

		<?php 
			echo CHAR_1 . " y " . CHAR_2 . " son ";
			are_equal(CHAR_1, CHAR_2); 
		?>

	</body>
