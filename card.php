<?php  
        include "classes/Localization.inc.php";
        error_reporting(0);
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
        <script type="text/javascript">
            var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
            document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
        </script>
        <script type="text/javascript">
            try {
            var pageTracker = _gat._getTracker("UA-xxxxxxx-x");
            pageTracker._trackPageview();
            } catch(err) {}
        </script>
    </head>
    <body>
        <div id="blurb">
            <img id="head" src="/images/bingo.gif">
            <h1><?php echo $loc->Translate("INDEX_PAGE_HEADER"); ?></h1>
            <h2><?php echo $loc->Translate("INDEX_PAGE_PRODUCED_BY"); ?></h2>
            <br>
            <?php echo $loc->Translate("INDEX_PAGE_DIRECTIONS_DESKTOP"); ?>
        </div>
        
        <div id="mobileheader">
            <?php echo $loc->Translate("INDEX_PAGE_DIRECTIONS_MOBILE"); ?>
            <br>
            <span style="font-size: 12px; font-family: 'Raleway', sans-serif; font-weight: 100; text-transform: uppercase;">Swipe to see the entire board &rarr;</span>
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
                              echo "<td id='tile" . $i .  "' class='row3 col3 bingotile' align='center'><img src='images/ona11.png' width='70px' height='70px' align='center'></td>";
                  $bingoboard[] = "";
                          }else{
                  $my_word = $words[$random[$i]];
                              echo "<td id='tile" . $i .  "' class=' row" . (int) ($i / 5 ) . " col" . ($i % 5) . " bingotile' align='center'>" . $my_word . "</td>";
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
                              echo "<td id='tile" . $i .  "' class='row3 col3 bingotile' align='center'><img src='images/ona11.png' width='50px' height='50px' align='center'></td>";
                          }else{
                  $my_word = $bingoboard[$i];
                              echo "<td id='tile" . $i .  "' class=' row" . (int) ($i / 5 ) . " col" . ($i % 5) . " bingotile' align='center'>" . $my_word . "</td>";
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
                <h2><?php echo $loc->Translate("INDEX_PAGE_PRODUCED_BY"); ?></h2>
            </div>
            <?php echo $loc->Translate("CARD_WELCOME_MSG_1") . "<b> " . $tester . $loc->Translate("CARD_WELCOME_MSG_2") ?>
        </center>
        <p>
    </body>
</html>
