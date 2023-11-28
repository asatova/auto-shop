<?php
get_header('private');?>
<?php the_post();?>
    <div class="container">
<h2><?php the_title();?></h2>
<?php the_post_thumbnail( ); ?>
<?php the_content();?>
</div>
<?php get_footer(); ?>