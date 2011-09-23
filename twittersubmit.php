<?php
$consumerKey    = '8jp7xABzIsLQkZ07OzImA';
$consumerSecret = 'h4SCneNGEfLLn8oTn3m62chmnAdgf3x2xTeLFAHw';
$oAuthToken     = '378594590-sMUJfCrldLeyOcEipIya3m4YtJLsCBbxE8V5NTh4';
$oAuthSecret    = '';

$username = $_POST['twitter'];
$hashtag = $_POST['sessionhashtag'];

require_once('twitteroauth/twitteroauth.php');

// create a new instance
$tweet = new TwitterOAuth($consumerKey, $consumerSecret, $oAuthToken, $oAuthSecret);

//send a tweet
$status = $username . ' just got BINGO at #ONA11 #BuzzwordBingo while at ' . $hashtag . '. You can play buzzword bingo too at ona11.journalists.org/bingo';
$tweet->post('statuses/update', array('status' => $status));

header('Location: http://twitter.com');
?>
