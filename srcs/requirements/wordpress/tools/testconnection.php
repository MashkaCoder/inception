<?php
$testConnection = mysql_connect('chasimir.42.fr', 'chasimir', '123123');
if (!$testConnection) {
die('Error: zzzzzzzzzzzzz ' . mysql_error());
}
echo 'Database connection working!';
mysql_close($testConnection);
?>

