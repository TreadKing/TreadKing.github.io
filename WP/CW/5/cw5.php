
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education up in Here!</title>
		<link href="./buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<h1>Buy Your Way to a Better Education up in Here!</h1>

		<p>
			Life itself is your professor, and you are in a state of constant learning, now there are 3 kinds of people in the world: people that can count and people that can't count. Which of the three are you?.  That's right!  All you need to get a 4.0 in this course. My education is about learning what you didn't know even if know you that didn't know. <br/><br/>
			
			'Do you need homework today I think so however the moment I forget to assign you homework there will be a scholar student to utter loudly 'We have homework...'

		</p>
		
		
		<h2>Give Us Your Money</h2>
		<form action = "sucker.php" method="post">
		<dl>
			<dt>Name</dt>
			<dd>
                <input type = "text" name = "name"/>
			</dd>
			
			<dt>Section</dt>
			<dd>
                <select name="section">
					<option value="">(Select a section)</option>
						<option>MA</option>
						<option>MB</option>
						<option>MC</option>
						<option>MD</option>
						<option>ME</option>
						<option>MF</option>
						<option>MG</option>
						<option>MH</option>
                </select>
			</dd>
			
			<dt>Credit Card</dt>
			<dd>
            	<input type="text" name="cardnumber" /><br />
				<label><input type="radio" name="cardtype" value="visa" />Visa</label>
				<label><input type="radio" name="cardtype" value="mastercard" />MasterCard</label>
			</dd>
		</dl>
		
		<div>
            <input type = "submit" value = "I am a giant sucker"> </input>
		</div>
	</form>
	</body>
</html>