<?php 	

$username = $_POST["username"];
$section = $_POST["section"];
$credit_no = $_POST["credit_no"];
$card = $_POST["card"];

$data = $username.";".$section.";".$credit_no.";".$card."<br>";

file_put_contents(__DIR__."/suckers.txt", $data."\n", FILE_APPEND | LOCK_EX);
$suckers=file_get_contents(__DIR__."/suckers.txt");

 ?>



 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>

		<?php
		
		if(empty($username) || empty($section) || empty($credit_no) || empty($card))
		{
		?>
		<h2>Sorry</h2>
        
        <p>
            You didn't fill out the form completely. 
            <a href="buyagrade.html">Try again?</a>
        </p>
		
		<?php 
		}
		else{
		?>


		<h1>Buy Your Way to a Better Education!</h1>

		<p>
			The rough economy, along with recent changes in University of Washington policy, now allow us to offer grades for money.  That's right!  All you need to get a 4.0 in this course is cold, hard, cash.
		</p>
		
		<hr />
		
		<h2>Give Us Your Money</h2>
		
			<dl>
				<dt>Name</dt>
				<dd>
					<?= $username;?>
				</dd>
			
				<dt>Section</dt>
				<dd>
					<?= $section; ?>
				</dd>
			
				<dt>Credit Card</dt>
				<dd>
					<?= $credit_no."($card)"; ?><br />
				</dd>
			</dl>


		<div>
			<h3>Here all suckers who submitted:</h3>
			<?php 
			
			echo "$suckers"; 
			}
			?>

		</div>
		
	</body>
</html>