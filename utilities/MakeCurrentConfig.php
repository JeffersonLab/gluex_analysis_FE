<?php

$command = escapeshellcmd('/u/group/halld/www/halldweb/html/analysis/utilities/MakeANALaunch.py dataset=' . $_GET['dataset'] );
//echo $command;
$output = shell_exec($command);
echo $output;
return $output;

?>