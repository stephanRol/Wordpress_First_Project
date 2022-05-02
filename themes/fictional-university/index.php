<?php get_header(); ?>
<main>
    <?php
    if(have_posts()){
        while(have_posts()){
            the_post();
            ?>
            <a href=<?php the_permalink(  )?>>
                <?php the_title();?>
            </a>
            <?php
            the_content();
            ?>
            <hr>
            <?php
        }
    }
    ?>
</main>
<?php get_footer(); ?>