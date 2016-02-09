<!DOCTYPE html>
<html>
  <head><?php

  include 'php/html_head.php';

  ?></head>

  <body><?php

        include 'php/html_facebook.php';

    ?><div class="page-wrapper"><?php

        include 'php/section_sidebar.php';

    ?><div class="content sc-content"><?php

        $dirname = "images/";
        $images = glob($dirname."*.jpg");

        foreach($images as $image) {
            $imgalt = basename($image, ".jpg");
            echo '<div class="img-container"><img class="collage-img" src="'.$image.'" alt="'.$imgalt.'"/></div>';
            // Extra bit for adding custom images <form class="popup-form"><input id="img-url" type="text" value="Enter URL here" /><input type="submit" value="Submit"></form>
        }

    ?></div>
    </div><?php

        include 'php/html_jquery.php';

  ?></body>
</html>
