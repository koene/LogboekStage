<?php error_reporting(0); ?><!doctype html>  
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
  <title>Logboek Stage Koen Everaert</title>
  <meta name="description" content="ProximityBBDO" />
  <meta name="author" content="ProximityBBDO" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <link rel="shortcut icon" href="assets/img/favicon.png" />
  <link rel="apple-touch-icon" href="LogboekStage/dev-php/assets/img/apple-touch-icon.png" />
  
  <link rel="stylesheet" href="/LogboekStage/dev-php/assets/css/style.css" />  
  <script src="assets/js/libs/jquery-1.8.1.min.js" type="text/javascript"></script>
  <script src="assets/js/libs/modernizr-2.6.1.min.js"></script>
</head>
<body>
  <script type="text/Javascript">
    function loop(){
      $('#nieuwBtn').animate({
        opacity: "0"
      }, 5  00);
      $('#nieuwBtn').animate({
        opacity: "1.0"
      }, 500, loop);
    }
  </script>

  <header>
    <h1>Koen Everaert 4 Proximity BBDO!</h1>
  </header>

  <div id="main">
      <div id="left">
      <h1>Overzicht van alle files</h1>
      <ul id="list">
      <?php
        if ($handle = opendir('assets/Pages')) {
            while (false !== ($entry = readdir($handle))) {
              $file = explode('.', $entry);
                if($file[1] == "md"){
                  $filen = str_replace("_", " ", $file[0]);
                  $filen = str_replace("-", "/", $filen);
                  echo "<li><a href=\"" . $file[0] . ".md\"";
                  $filenameArray = explode('.', $filename);
                  if($filenameArray[0] == $file[0]){
                    echo ' style="margin-left:-20px;color:#F2F1E4;"';
                  }
                  echo ">" . $filen . "</a></li>";
                }
            }
            closedir($handle);
        }
        ?>
      </ul>
    </div>
    <div id="right">
      <script type="text/Javascript">
        $('#right').animate({
          opacity: "1.0",
          marginTop: "20px"
        }, 500);
        loop();
      </script>
		<?php echo($content); ?>
    </div>
  </div>

  <footer>
    <h2 style="font-size:12px;">Copyright by Jan-en-alleman.be</h2>
    <a href="<?php echo $filename . '.delete'; ?>" title="Verwijder dit bestand" id="delete">Delete</a>
    <a href="<?php echo $filename . '.edit'; ?>" title="Wijzig dit bestand" id="edit">Wijzigen</a>
    <a href="new" title="Nieuw bestand" id="nieuwBtn">Nieuw</a>
  </footer>
</body>
