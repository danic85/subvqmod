<?php

require_once('SubVQModGenerator.php');

// Location of patch file to be parsed.
define ( 'PATCH_LOCATION', 'patch/patch.patch' );
// Location of source code that will be changed by patch
define ( 'ORIGINAL_LOCATION', 'original/' );

// Create new SubVQMod Generator
$gen = new SubVQModGenerator();
// Parse SVN patch file
$gen->parsePatch(PATCH_LOCATION);
// Generate VQMod XML file
$gen->generateVQModXML();
// Output VQMod XML file to browser
$gen->xmlToScreen();
