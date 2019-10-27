<?php
function nav_stacked_menu(array $table, $bodyTitle=null)
{
	$active = " class=\"active\" ";
	if (isset($bodyTitle)):
	 echo "<h1 align=\"center\">$bodyTitle</h1><hr>";
	endif;
	echo "<div class=\"row\">";
	echo "<ul class=\" nav nav-stacked nav-pills col-md-2 menu\">\n";
	foreach ($table as $key => $item) {		
	echo "<li$active><a href=\"#$key\" data-toggle=\"tab\">$item</a></li>\n";
	$active=null;
	}
	echo "</ul>";
	echo "</div>";
}?>
