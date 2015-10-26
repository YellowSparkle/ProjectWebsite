<?php

	$cost = ['cost' => 11,];
	
    $hash = password_hash("euobtneohu", PASSWORD_BCRYPT, $cost);
	
	echo $hash."\n";
	
	if (password_verify('euobtneohu', $hash)) {
    echo 'Password is valid!';
	} else {
    echo 'Invalid password.';
	}
?>