<!doctype html>  
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

  <header>
    <h1>Ongelooflijk boeiende headertekst!</h1>
    <a href="new" title="Nieuw bestand" id="nieuwBtn">Nieuw</a>
  </header>

  <div id="main">
      <div id="left">
      <h1>Overzicht van alle .md files</h1>
      <ul id="list">
      <?php
        if ($handle = opendir('assets/Pages')) {
            while (false !== ($entry = readdir($handle))) {
              $file = explode('.', $entry);
                if($file[1] == "md"){
                  echo "<li><a href=\"" . $file[0] . ".md\">" . $file[0] . "</a></li>";
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
      </script>
		<?php echo($content); ?>
    </div>
  </div>

  <footer>
    <h2>Nog spannendere footertekst</h2>
  </footer>
</body>
