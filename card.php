<?php  
		include "classes/Localization.inc.php";
		$loc = new Localization($_POST['lang']);
		if ($_POST['name'] != null) {
			$tester = $_POST['name'];
		}
		else {
			$tester = $loc->Translate("CARD_DEFAULT_NAME");
		}
?>
<html>
	<head>
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes" name="viewport">
		<title><?php echo $loc->Translate("CARD_PAGE_TITLE"); ?> </title>
		<link rel="stylesheet" type="text/css" href="styles/style.css" media="screen and (min-device-width: 800px)" />
		<link rel="stylesheet" type="text/css" href="styles/style.css" media="screen and (min-device-width: 481px) and (max-device-width: 799px)" />
		<link rel="stylesheet" type="text/css" href="styles/mobile.css" media="only screen and (max-device-width: 480px)" />
    <script src="http://ajax.microsoft.com/ajax/jquery/jquery-1.3.2.min.js" type="text/javascript"></script>   
    <script type="text/javascript">
		  WebFontConfig = {
		    google: { families: [ 'Arvo:400,700:latin', 'Raleway:100:latin', 'Lobster+Two:400,400italic,700,700italic:latin', 'Nobile:400,400italic,700,700italic:latin' ] }
		  };
		  (function() {
		    var wf = document.createElement('script');
		    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
		      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
		    wf.type = 'text/javascript';
		    wf.async = 'true';
		    var s = document.getElementsByTagName('script')[0];
		    s.parentNode.insertBefore(wf, s);
		  })();
		</script>
		<script type="text/javascript" src="bingo.js"> </script>
		<script type="text/javascript" src="instructions.js"></script>

	</head>
	<body>
		<div id="blurb">
			<img id="head" src="/images/bingo.gif">
			<h1>#ONA11 #innovation #dataviz #socialmedia</h1>
			<h2>produced by the <a href="http://ona11.journalists.org/student-newsroom/">ONA Student Newsroom.</a></h2>
			<br>
			
			Buzzword Bingo is easy! Every time you hear a word on the board below in a session, click the tile! We've even given you a free tile to start.
		</div>
		
		<div id="mobileheader">
			<img id="head" src="/images/bingo.gif">
			<br>
			Buzzword Bingo is easy! Every time you hear a word on the board below in a session, click the tile! We've even given you a free tile to start.
		</div>
		<div id="wrapper">
			<center>
			<table>
			<?php
	      if (! array_key_exists('bingoboard', $_COOKIE) or $_COOKIE['bingoboard'] == ""){
				  $words = $loc->Translate("WORDS_ARRAY"); 
				  shuffle($words);
				  $random = array_rand($words, 30);
				  shuffle($random);
	        $bingoboard = array();
				  echo "<tr>";
				  for($i=0;$i<25;$i++){
						  if(($i % 5)==0) echo "</tr><tr>";
						  if($i==12)
						  {
							  echo "<td id='a" . $i .  "' class='bingotile' align='center'><img src='images/ona11.png' width='70px' height='70px' align='center'></td>";
	              $bingoboard[] = "";
						  }else{
	              $my_word = $words[$random[$i]];
							  echo "<td id='a" . $i .  "' class='bingotile' align='center'>" . $my_word . "</td>";
	              $bingoboard[] = $my_word;
						  }
					  }
					  echo "</tr>";
	          setcookie('bingoboard', serialize($bingoboard));
	      }else{
	        $bingoboard = unserialize($_COOKIE['bingoboard']);
				  /*$words = $loc->Translate("WORDS_ARRAY"); 
				  shuffle($words);
				  $random = array_rand($words, 30);
				  shuffle($random);
	        bingoboard = array()*/
				  echo "<tr>";
				  for($i=0;$i<25;$i++){
						  if(($i % 5)==0) echo "</tr><tr>";
						  if($i==12)
						  {
							  echo "<td id='a" . $i .  "' class='bingotile' align='center'><img src='images/ona11.png' width='70px' height='70px' align='center'></td>";
						  }else{
	              $my_word = $bingoboard[$i];
							  echo "<td id='a" . $i .  "' class='bingotile' align='center'>" . $my_word . "</td>";
						  }
					  }
					  echo "</tr>";        
	      }
				?>
			</center>
			</table>
		</div>
		<center>
			<br>
			<div id="mobilefooter">
				<h2>produced by the <a href="http://ona11.journalists.org/student-newsroom/">ONA Student Newsroom.</a></h2>
			</div>
			<?php echo $loc->Translate("CARD_WELCOME_MSG_1") . "<b> " . $tester . $loc->Translate("CARD_WELCOME_MSG_2") ?>
		</center>
	</body>
</html>