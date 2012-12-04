<?php
	
	global $key;
    
    if( $key != 'ok' ){
    	echo "CHEATER";
		exit;
    }
	
    
    $headline = "<h1>Assignment 1</h1>";
	
	$body = "<p>In envelope 1 you find a word puzzle that forms a line from a well known song.</p>";
	
	$objectives = "<h3>Objectives:</h3><ol><li>Solve the word puzzle - the title of the song is the password for the next assignment</li></ol>";
	
	echo $headline;
	echo $body;
	echo $objectives;
?>