<!DOCTYPE html>
<html>
  <head><?php

    include "sitecake/server/sitecake_entry.php";
    include 'php/html_head.php';

  ?></head>

  <body><?php

        include 'php/html_facebook.php';

    ?><div class="page-wrapper"><?php

        include 'php/section_sidebar.php';

    ?><div class="content"><?php

        $dirname = "images/gallery/";
        $images = glob($dirname."*.jpg");

        foreach($images as $image) {
            $imgalt = basename($image, ".jpg");
            echo '<div class="img-container"><img class="collage-img" src="'.$image.'" alt="'.$imgalt.'"/></div>';
        }

    ?></div>
    </div><?php

        include 'php/html_jquery.php';

  ?></body>
</html>
