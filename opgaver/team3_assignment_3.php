<?php
	
	global $key;
    
    if( $key != 'ok' ){
    	echo "CHEATER";
		exit;
    }
	
    
    $headline = "<h1>Assignment 3</h1>";
	$body = "<p>In envelope 3 you find a list of various objects, sights, or situations</p>";
	
	
	$objectives = "<h3>Objectives:</h3><ol>
	<li>Help Santa! Santa needs help getting <b>two more presents</b> - Your team needs to buy these - see the prescriptions below:
		<ul>
			<li>each present must cost no more than 125 kr</li>
			<li>each present must be neither drink nor food</li>
			<li>each present must be at least partly yellow</li>
			<li>each present must be individually gift wrapped</li>
		</ul>
	</li>
	<li>Take as many photos of the things on the list, but remember that the mascot elf needs to be a part of the photo - each approved photo is awarded one point</li>
	<li>Arrive at <b>Sørens værthus</b> at 19:20 as precisely as possible - for every minute you are late or for every two minutes early you will lose one point.</li>
	</ol>";
	
	
	echo $headline;
	echo $body;
	echo $objectives;
?>