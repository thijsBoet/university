<?php

get_header();

while(have_posts()){
  the_post();?>
    <h2>
      <?php the_title() ?>
    </h2>
    <body>
      <?php the_content() ?> 
    </body>
<?php }

get_footer();

?>