<?php

    $hash = password_hash("test", PASSWORD_BCRYPT);
	
	echo $hash."\n";
	
	if (password_verify('$_POST[password]', '$2y$11$6OjF18HZi1W2QVqkYl4V.eVK0fXk3P0r65dchuLCSco.DLWaupp4C')) {
    echo 'Password is valid!';
	} else {
    echo 'Invalid password.';
	}
?>