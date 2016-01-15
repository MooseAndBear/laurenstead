<!DOCTYPE html>
<html>
  <head><?php

  include 'php/html_head.php';

  ?></head>

  <body>

    <div class="page-wrapper"><?php

        include 'php/section_sidebar.php';

    ?><div class="content"><?php

        $dirname = "images/";
        $images = glob($dirname."*.jpg");
 
        foreach($images as $image) {
            $imgalt = basename($image, ".jpg");
            echo '<div class="img-container"><img src="'.$image.'" alt="'.$imgalt.'"/><form class="popup-form"><input id="img-url" type="text" value="Enter URL here" /><input type="submit" value="Submit"></form></div>';
        }

    ?></div>
    </div><?php
    
        include 'php/html_javascript.php';

  ?></body>
</html>  