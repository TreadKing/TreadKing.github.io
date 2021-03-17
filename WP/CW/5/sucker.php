<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<link href="./buyagrade.css" type="text/css" rel="stylesheet" />
<?php 

$name = $_POST["name"];
$section = $_POST["section"];
$cardnumber = $_POST["cardnumber"];
$cardtype = $_POST["cardtype"];
$file = 'data.txt';
$info = "$name; $section; $cardnumber; $cardtype \n";
file_put_contents($file,$info, FILE_APPEND);
    if (!$_POST["name"]||!$_POST["section"]|| !$_POST["cardnumber"] || !$_POST["cardtype"]) {
		$msg_to_user = '<h1> Sorry</h1> <p> You did not fill out the form completely. <a href="https://codd.cs.gsu.edu/~dpatel160/WP/CW/5/cw5.php">Try again?</a> </p>';
		echo $msg_to_user ;
		exit();
		
    } 


?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<h1>Thanks, sucker!</h1>
		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
			<dd>
			<?php
			echo $name;
			echo "<br>";
			?>
			</dd>

			<dt>Section</dt>
			<dd> 
			<?php
			echo $section;
			echo "<br>";
			?>
			</dd>

			<dt>Credit Card</dt>
			<dd> 
			<?php
			echo "$cardnumber ($cardtype)";
			echo "<br><br>";
			?>
			</dd>
			
			<dt> Here are all of the other suckers that have submitted here:</dt>
			<dd> 
			<?php
				echo nl2br(file_get_contents('data.txt')) ;
			?>
			</dd>
		</dl>
	</body>
</html>