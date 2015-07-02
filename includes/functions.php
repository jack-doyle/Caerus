<?php

function on_index() {
	return strpos($_SERVER['PHP_SELF'], 'index');
}

function get_styles() {
	// If on the index page look in css folder, else go up one directory first
	echo($stylesheet_path = on_index() !== false ? "" : "../");
}

function get_url($name) {
	if(on_index()) {
		if($name !== "index") {
			$path = "php/";
		} else {
			$path = "";
		}
	} else {
		if($name !== "index") {
			$path = "";
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
