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
      <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes" name="viewport">
		  <title><?php echo $loc->Translate("INDEX_PAGE_TITLE"); ?> </title>
		  <link rel="stylesheet" type="text/css" href="styles/style.css">
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

	  </head>
	  <body>
		  <a id="github" href="https://github.com/jeremybmerrill/Business-Bingo"><img style="position: absolute; top: 0; right: 0; border: 0;" src="images/github.png" alt="Fork me on GitHub"></a>
		  <center>
        <h1>Bingo!</h1>
			  <?php echo $loc->Translate("INDEX_WELCOME_MSG_1"); ?>
			  <br /><br />
        <h3><?php echo $loc->Translate("INDEX_WELCOME_MSG_4"); ?></h3>
			  <form action="twittersubmit.php" method="POST"> 
			  <?php echo $loc->Translate("INDEX_WELCOME_MSG_2"); ?>
				  <input type="text" id="twitter" name="twitter" maxlength="25" value="@twitterhandle"/><br />
			   <?php echo $loc->Translate("INDEX_WELCOME_MSG_3"); ?>
				  <input type="text" id="lang" name="sessionhashtag" maxlength="25" value="#ONA11"><br />
				  <input type="submit" value="<?php echo $loc->Translate("INDEX_SUBMIT_BUTTON"); ?>">
			  </form>
        <div id="youtube" style="text-align: center;" ><iframe width="560" height="315" src="http://www.youtube.com/embed/3j973s1a3kk" frameborder="0" allowfullscreen></iframe></div><br />

			  <span id="authors"><?php echo $loc->Translate("INDEX_AUTHORS"); ?></span>
			  <br />
			  <?php echo $loc->Translate("INDEX_DISCLAIMER"); ?>
			  <br />
			  <?php echo $loc->Translate("INDEX_FOOTER_MSG"); ?>
		  </center>
	  </body>
  </html>


<? // ONA11BuzzwordBingo: @JeremyBMerrill just got BINGO at #ONA11 #BuzzwordBingo while at the #whateverwhatever session. You can play buzzword bingo too at ona11.journalists.org/bingo ?>
