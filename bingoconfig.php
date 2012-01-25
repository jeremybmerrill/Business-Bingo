<?php

global $consumerSecret;
global $oAuthSecret;

$consumerSecret = 'your secret';
$oAuthSecret    = 'your secret';

$root_url = "http://jeremybmerrill.com/sotubingo"; #the root of the bingo directory. used for correct redirect in twittersubmit.php


#$dbname = "buzzwordbingo";
#$host = "mysql.jeremybmerrill.com";
#$mysqluser = "buzzwordbingo";
#$mysqlpassword = "buzzbuzzona1";
#$db = new PDO("mysql:host=$host;dbname=$dbname", $mysqluser, $mysqlpassword); 
#$prepared_select = $db -> prepare("SELECT count FROM wordfreq WHERE word = :word;");
#$prepared_insert = $db -> prepare("UPDATE wordfreq SET count = :newcount WHERE word = :word");
?>
