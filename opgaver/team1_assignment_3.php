<?php
	
	global $key;
    
    if( $key != 'ok' ){
    	echo "CHEATER";
		exit;
    }
	
    
    $headline = "<h1>Assignment 3</h1>";
	$body = "<p>In envelope 3 you find a list of various objects, sights, or situations</p>";
	
	
	$objectives = "<h3>Objectives:</h3><ol>
	<li>Buy a mandelgave - the present must meet all the criterias below
		<ul>
			<li>must cost no more than 250 kr</li>
			<li>cannot be either drink or food</li>
			<li>must be at least partly red</li>
			<li>must be gift wrapped</li>
		</ul>
	</li>
	<li>Take as many photos of the things on the list but remember that the mascot elf needs to be a part of the photo - each approved photo is awarded one point</li>
	<li>Arrive at Sørens værthus at 19:20 as precisely as possible - for every minute you are late or for every two minutes early you will lose one point.</li>
	</ol>";
	
	
	echo $headline;
	echo $body;
	echo $objectives;
?>