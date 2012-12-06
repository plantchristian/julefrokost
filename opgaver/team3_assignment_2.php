<?php
	
	global $key;
    
    if( $key != 'ok' ){
    	echo "CHEATER";
		exit;
    }
	
    
    $headline = "<h1>Assignment 2</h1>";
	$body = "<p>In envelope 2 you find a <i>tipskupon</i> with the answers for 15 questions - here below you find the questions to match the answers";
	
	$options = "
		<ol>
			<li>How many times has Jens celebrated his marriage to Katrin?</li>
			<li>What is the name of Dorthe's landlord (boyfriend)?</li>
			<li>Which of these jobs has Christian never held?</li>
			<li>Where did Frederik serve in the army?</li>
			<li>Which Ferry should you take, if you are going to Mads' summer house?</li>
			<li>What did Kasper do before he started studying Multimediadesign?</li>
			<li>Which sport has William practiced on a proffesional level?</li>
			<li>Which city is Esther originally from?</li>
			<li>Where does Sophies exotic name stem from?</li>
			<li>What is the name of Sergios mother?</li>
			<li>How many pairs of glasses do Dorthe own?</li>
			<li>What is the colour of Mads' car?</li>
			<li>What is the name of Esther's homepage?</li>
		</ol>";
	
	$objectives = "<h3>Objectives:</h3><ol>
	<li>Go to Byens Kro (Møntergade 8)</li>
	<li>Fill in the <i>tipskupon</i> - each correct answer will be awarded 1 point</li>
	<li>Take a photo of the whole team, your mascot elf and the filled in <i>tipskupon</i> in jouyous gathering at Byens Kro and send it to 40738101</li>
	</ol>";
	
	
	$bonus = "<p>You will receive a reply with the password for the next assignment</p2>";
	
	echo $headline;
	echo $body;
	echo $options;
	echo $objectives;
	echo $bonus;
?>