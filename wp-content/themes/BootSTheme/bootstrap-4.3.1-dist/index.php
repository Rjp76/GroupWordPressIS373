<?php get_header(); ?>

<?php get_footer(); ?>
<?php

get_stylesheet_uri();

?>
<script src="../js/bootstrap.js"></script>
<script src="../js/bootstrap.bundle.js"></script>

<div class="panel panel-default panel-body">
    <div>
        <div>
            <ul>
                <?php wp_list_categories('orderby=name&title_li='); ?>
            </ul>
        </div>
    </div>
</div>



<div>
    <?php while(have_posts()) : the_post(); ?>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p><?php the_excerpt(); ?></p>
    <p> posted by <?php the_author(); ?>
        <?php endwhile; wp_reset_query(); ?>
</div>