<?php

function on_index() {
	return strpos($_SERVER['PHP_SELF'], 'index');
}

function get_styles() {
	// If on the index page look in css folder, else go up one directory first
	echo($stylesheet_path = on_index() !== false ? "" : "../");
}

<<<<<<< HEAD
function get_favicon() {
	// If on the index page look in images folder, else go up one directory first
	echo($favicon_path = on_index() !== false ? "" : "../");
}

=======
>>>>>>> 639d4236f7d06f4cfeb4d6e5affa594750a5ac0f
// Function to get the correct url for each of the menu items, depending on where the user currently is.
function get_url($name) {
	
	// If on the index page,
	if(on_index()) {
		// look in the 'php/' directory for all the pages,
		if($name !== "index") {
			$path = "php/";
		// except the index page, which is in this directory.
		} else {
			$path = "";
		}
	// else if on a different page (already in the 'php/' directory),
	} else {
		// look in this directory for all the pages,
		if($name !== "index") {
			$path = "";
		// except the index page which is in the parent directory (root directory).
		} else {
			$path = "../";
		}
	}
	
	echo($path);
}
	
function get_current($name) {
	// Add class ".current" to the menu item of the current page.
	echo($class = strpos($_SERVER['PHP_SELF'], $name) !== false ? "current" : "");
}
?>
