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
		<title><?php echo $loc->Translate("CARD_PAGE_TITLE"); ?> </title>
		<link rel="stylesheet" type="text/css" href="styles/style.css"> 
    <script src="http://ajax.microsoft.com/ajax/jquery/jquery-1.3.2.min.js" type="text/javascript"></script>   
		<script type="text/javascript" src="bingo.js"> </script>
	</head>
	<body>
		<table width="500px" align="center" border="1">
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
						  echo "<td id='a" . $i .  "' width='100px' height='100px' align='center'><img src='images/ona11.png' width='70px' height='70px' align='center'></td>";
              $bingoboard[] = "";
					  }else{
              $my_word = $words[$random[$i]];
						  echo "<td id='a" . $i .  "' width='100px' height='100px' align='center'>" . $my_word . "</td>";
              $bingoboard[] = my_word;
					  }
				  }
				  echo "</tr>";
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
						  echo "<td id='a" . $i .  "' width='100px' height='100px' align='center'><img src='images/ona11.png' width='70px' height='70px' align='center'></td>";
					  }else{
              $my_word = $bingoboard[$i];
						  echo "<td id='a" . $i .  "' width='100px' height='100px' align='center'>" . $my_word . "</td>";
					  }
				  }
				  echo "</tr>";        
      }
			?>

		</table>
		<center>
			<br>
			<?php echo $loc->Translate("CARD_WELCOME_MSG_1") . "<b> " . $tester . "</b>! " . $loc->Translate("CARD_WELCOME_MSG_2") ?>
		</center>
    <?php setcookie('bingoboard', serialize(bingoboard)); ?>
	</body>
</html>
