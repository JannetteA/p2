<!DOCTYPE html>
<html>
<head>

	<title>Password Generator</title>
		
	<meta charset="UTF-8">
	<link href="p2.css" rel="stylesheet" type="text/css">
	
</head>
<body>

	<div class="wrapper">
		
		<h3>Star Wars Words</h3>
		<h1>Password Generator</h1>
		<span>This site allows you to generate a xkcd password using words from the Star Wars movie.</span>

		<p class="password">
			<?php require 'logic.php'; ?>

		</p>
	

			<form action='index.php' method='GET'>

				<p>
				<label for='totalwords'>How many words?</label>
				<input maxlength=1 type='text' name='totalwords' size=3 id='totalwords' value='0'>  (Min 3, Max 5)
				</p>

				<p>
				Add a number to the password?
				<input type="radio" name="add_number" id="add_number"  value="yes">Yes
				<input type="radio" name="add_number2" id="add_number2"  value="no">No
				</p>

				<p>
				Add a symbol to the password?
				<input type="radio" name="add_symbol" id="add_symbol"  value="yes">Yes
				<input type="radio" name="add_symbol2" id="add_symbol2"  value="no">No
				</p>

				<input class="button" type="submit" value="Generate Password">
	
			</form>


			<p class="error"> 
				<?php echo $errormessage  ?>  
			</p>

	</div>

</body>
</html>