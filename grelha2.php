<?php
/* 
Template Name: Grelha 6+6
*/

    $cat_id;
    $cats = get_categories( );

    if ($pagename == "republicas") {
?>

<?php
    query_posts('cat=' . $cat_id);

    get_header();

    include 'navbar.php';
    include 'slideshow.php';

    if ($pagename == "republicas") {

    if(have_posts()) {
?>
    
    <section class="container cor">
        
<?php
     while (have_posts()) : the_post()
?>

    <article>
        <div class="col-md-6 col-sm-6 col-xs-6 centrar">
            <a href="<?php the_permalink(); ?>"  class="radius button">
            </a>
            <h2><?php the_title();?></h2>
        </div>
<?php
    }
    }
    }
?>
        
</article>

<?php endwhile; ?>
        
</section>

<?php
    wp_reset_query();

    get_footer();
?>

