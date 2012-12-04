<?php
	
	global $key;
    
    if( $key != 'ok' ){
    	echo "CHEATER";
		exit;
    }
	
    
    $headline = "<h1>Assignment 2</h1>";
	$body = "<p>In envelope 2 you find a tipskupon with the answers for 15 questions - here below you find the questions to match the answers";
	
	$options = "
	<ol>
		<li>Which artist does Christian have more records with?</li>
		<li>Which car does Martin want the most?</li>
		<li>What was the first computer Mads owned?</li>
		<li>Which of these languages does Sergio speak?</li>
		<li>What is the longest Sergio has run in one go?</li>
		<li>In what foreign city has Martin lived?</li>
		<li>What is the population in the city where Jens is From?</li>
		<li>Sophie has competed in the Danish Championships of which “sport“?</li>
		<li>Louise hold a bachelor degree in...</li>
		<li>The first koncert Jens went to was with...</li>
		<li>What is the name of Jacob's record company?</li>
		<li>What is the name of the agency Christian worked with in Amsterdam?</li>
		<li>What after school activity did Rasmus have as a child?</li>
	</ol>";
	
	$objectives = "<h3>Objectives:</h3><ol>
	<li>Go to Bobi Bar (Klareboderne 14)</li>
	<li>Fill in the tipskupon - each correct answer will be awarded 1 point</li>
	<li>Take a photo of the whole team, your mascot elf and the filled in form in jouyous gathering at Bobi Bar and send it to 40738101</li>
	</ol>";
	
	
	$bonus = "<p>You will receive a reply with the password for the next assignment</p2>";
	
	echo $headline;
	echo $body;
	echo $options;
	echo $objectives;
	echo $bonus;
?>