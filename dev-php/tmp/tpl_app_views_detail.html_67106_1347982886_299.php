      <div id="titleFile">
        <?php
          echo $filename;
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