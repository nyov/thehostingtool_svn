<?php
//////////////////////////////
// The Hosting Tool
// Output
// By Jonny H
// Released under the GNU-GPL
//////////////////////////////

$data = ob_get_contents(); # Get all the HTML created by the script
ob_end_clean(); # Erase that data
echo $style->prepare($data); # Prepare and output it
?>