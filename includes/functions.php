<?php

function on_index() {
	return strpos($_SERVER['PHP_SELF'], 'index');
}


// Function to echo the title of the current page to the header's <title> tag.
function get_title() {
    $url = $_SERVER['PHP_SELF'];
    $re = '/\/([^\/]*)$/';  // Finds everything after the last slash.
    preg_match($re, $url, $matches);
    
    // We're going to chop off either '.php' or '.html' from the url to get the page title.
    if(strpos($url, 'php') !== false) {
        $offset = 4;
    } else if(strpos($url, 'html') !== false) {
        $offset = 5;
    }
    
    // Trim the url according to the offset, and capitalise the first letter.
    $page_name = ucfirst(substr($matches[1], 0, -$offset)); 
    echo(" | " . $page_name);
}


// Function to get the correct path for the stylesheet and favicon.
function get_path() {
    // If on the index page look in current folder, else go up one directory first.
	echo($path = on_index() !== false ? "" : "../");
}


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
