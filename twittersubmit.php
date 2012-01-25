<?php

require_once('bingoconfig.php');

global $consumerSecret;
global $oAuthSecret;
global $root_url;

$consumerKey    = '8jp7xABzIsLQkZ07OzImA';
$oAuthToken     = '378594590-uU9igS21ORUtPeeJiQixlKu6k3gcflOA4DSCHAxf';


$username = $_POST['twitter'];
$hashtag = $_POST['sessionhashtag'];

require_once('twitteroauth/twitteroauth.php');

// create a new instance
$tweet = new TwitterOAuth($consumerKey, $consumerSecret, $oAuthToken, $oAuthSecret);

//send a tweet
$status = $username . ' just got BINGO at #ONA11 #BuzzwordBingo while at ' . $hashtag . '. Play along at http://ona11.journalists.org/bingo';
if ($username != "@twitterhandle" && $username != ""){
        $tweet->post('statuses/update', array('status' => $status));
        header('Location: http://twitter.com');
}else{
        if( substr($root_url, -1) != "/"){
            $root_url = $root_url . "/"
        }
        header('Location: '+ $root_url + 'yougotbingo.php');
}
?>
