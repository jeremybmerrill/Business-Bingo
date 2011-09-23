<?php 
  
  require_once "classes/Localization.inc.php";
  require_once 'bingoconfig.php';

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

<? 

function increment_db($word){  
  if (strlen($word) > 28){
    $word = substr($word, 0, 28);
  }
  global $prepared_select;
  global $prepared_insert;
  $prepared_select -> bindParam(':word', $word);
  $prepared_select -> execute();
  $result = $prepared_select -> fetch();
  $count = $result["count"];
  
  $prepared_insert -> bindParam(':word', $word);  
  $prepared_insert -> bindParam(':count', $count);
  $prepared_insert -> execute();  
}
 ?>
