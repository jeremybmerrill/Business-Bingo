<?php 
  require_once "classes/Localization.inc.php";

  setcookie("bingoboard", "", 1);

  if (isset($_GET['lang'])) {
	  $lang = $_GET['lang'];
  }
  else {
	  $lang = "en_US";
  }
	  $loc = new Localization($lang);
  ?>
  <html>
	  <head>
		  <title><?php echo $loc->Translate("INDEX_PAGE_TITLE"); ?> </title>
		  <link rel="stylesheet" type="text/css" href="styles/style.css"> 
	  </head>
	  <body>
		  <a href="https://github.com/jeremybmerrill/Business-Bingo"><img style="position: absolute; top: 0; right: 0; border: 0;" src="images/github.png" alt="Fork me on GitHub"></a>
		  <center>
			  <?php echo $loc->Translate("INDEX_WELCOME_MSG_1"); ?>
			  <br /><br />
			  <form action="twittersubmit.php" method="POST"> 
			  <?php echo $loc->Translate("INDEX_WELCOME_MSG_2"); ?><br />
				  <input type="text" id="twitter" name="twitter" maxlength="25" value="@twitterhandle"/>
			   <?php echo $loc->Translate("INDEX_WELCOME_MSG_2"); ?><br />
				  <input type="text" id="lang" name="sessionhashtag" maxlength="25" value="#ONA11">
				  <input type="submit" value="<?php echo $loc->Translate("INDEX_SUBMIT_BUTTON"); ?>">
			  </form>
			  <?php echo $loc->Translate("INDEX_AUTHORS"); ?>
			  <br />
			  <?php echo $loc->Translate("INDEX_DISCLAIMER"); ?>
			  <br />
			  <?php echo $loc->Translate("INDEX_FOOTER_MSG"); ?>
		  </center>
	  </body>
  </html>

<? // ONA11BuzzwordBingo: @JeremyBMerrill just got BINGO at #ONA11 #BuzzwordBingo while at the #whateverwhatever session. You can play buzzword bingo too at ona11.journalists.org/bingo ?>
