<?php

require_once('SubVQModGenerator.php');

// Location of patch file to be parsed.
define ( 'PATCH_LOCATION', 'patch/patch.patch' );
// Location of source code that will be changed by patch
define ( 'ORIGINAL_LOCATION', 'original/' );

try
{
	// Create new SubVQMod Generator
	$gen = new SubVQModGenerator();
	// Parse SVN patch file
	$gen->parsePatch(PATCH_LOCATION);
	// Generate VQMod XML file
	$ok = $gen->generateVQModXML();
	
	if (!$ok) $gen->displayFails(); // Display failed operations
	else $gen->xmlToScreen(); //Output VQMod XML file to browser
}
catch(Exception $e)
{
	echo '<p><strong>Error:</strong> ' .$e->getMessage() .'</p>';
}
