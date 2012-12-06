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
			<li>What is the name of Louise's flat mate?</li>
			<li>Which sport did Esther practise?</li>
			<li>How many records do Jacob own (approx.)?</li>
			<li>Which is Williams favourite football team?</li>
			<li>What is Kaspers favourite dish</li>
			<li>How many times has Rasmus been married?</li>
			<li>How old was Frederik when he got his first mobile phone?</li>
			<li>What is the name of the first agency where Dorthe worked?</li>
			<li>Which one of these magazines has Martin never subscribed to?</li>
			<li>How many pairs of shoes does Louise own?</li>
			<li>What does Jacob never eat?</li>
			<li>What was Rasmus' former surname?</li>
			<li>For how long did William have his bicycle in Copenhagen?</li>
		</ol>";
	
	$objectives = "<h3>Objectives:</h3><ol>
	<li>Go to The Moose (Sværtegade 5)</li>
	<li>Fill in the <i>tipskupon</i> - each correct answer will be awarded 1 point</li>
	<li>Take a photo of the whole team, your mascot elf and the filled in <i>tipskupon</i> in jouyous gathering at The Moose and send it to 61690609</li>
	</ol>";
	
	
	$bonus = "<p>You will receive a reply with the password for the next assignment</p2>";
	
	echo $headline;
	echo $body;
	echo $options;
	echo $objectives;
	echo $bonus;
?>