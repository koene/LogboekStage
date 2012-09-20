      <div id="titleFile">
        <?php
          $filen = str_replace("_", " ", $filename);
          $filen = str_replace("-", "/", $filen);
          echo $filen;
        ?>
      </div><hr>
      <div id="contentFile">
        <?php
          if(isset($content_van_file)){
            echo $content_van_file;
          }else{
            echo 'geen content';
          }
        ?>
      </div>