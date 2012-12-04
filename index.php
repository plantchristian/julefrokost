<html>
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="stylesheet" href="main.css" />
   </head>
<?php
	$pwds = array( 
					"env1" => array( 
								"last christmas" => "opgaver/team1_assignment_2.php", 
								"skov2hest6" => "opgaver/team2_assignment_2.php", 
								"jingle bells" => "opgaver/team3_assignment_2.php"
								 ),
					"env2" => array( 
								"pade6spar2" => "opgaver/team1_assignment_3.php", 
								"felt7logo8" => "opgaver/team2_assignment_3.php", 
								"rend2kile1" => "opgaver/team3_assignment_3.php"
								)
				);
	if($_POST){
	  	if($_POST['action']){
	  		switch( $_POST['action']){
				case 'verify':
					validatePassword($_POST['envelope'], strtolower($_POST['password']));
					break;
	  		}
		}
	}
	else{
		displayAssignment('opgaver/assignment_1.php');
		displayForm( 'env1' );
	}
	
	
	function validatePassword( $envelope, $pass ){
		
		global $pwds;
		global $currentPostNum;
		if( array_key_exists($envelope, $pwds) ){
			// POST FINDES I ARRAYET
			$envPwds = $pwds[ $envelope];
			if( array_key_exists($pass, $envPwds) ){
				// PASSWORD FINDES I POST ARRAY
				displayAssignment($envPwds[$pass]);
				switch( $envelope ){
					case 'env1':
						displayForm('env2');
						break;
				}
				exit;
			}
			displayForm($envelope, "wrong password");
		}
		else displayForm($envelope, "unkwown form");
	}
	
	function displayAssignment( $url ){
		
		global $key;		
		ob_start();
		$key = 'ok';
		include $url;
		$result = ob_get_clean();
		echo '<section id="assignment" >'.$result.'</section>';
	}
	
	function showError( $msg ){
		displayForm('post1', $msg);
	}
	
	function displayForm( $envelope, $errMsg = null ){
		?>
		<section id="passwordForm">
			<header>
				<h2>Type Password</h2>
			</header>
			<?
			if( $errMsg ){ ?>
				<div id="errorLayer"><? echo $errMsg; ?></div>
			<?}
			?>
			<form action="index.php" method="POST">
				<label for="password"></label>
				<input type="hidden" id="action" name="action" value="verify" />
				<input type="hidden" id="envelope" name="envelope" value="<? echo $envelope; ?>" />
				<input type="text" id="password" name="password" placeholder="Type password" />
				<input type="submit" />
			</form>
		</section>
		<?
	}
?>
</html>
