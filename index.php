<?php
$link = mysql_connect('justdoeatdb.ctu13g3tu6e0.us-west-2.rds.amazonaws.com:3306', 'justdoeat', 'evandale175');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>

