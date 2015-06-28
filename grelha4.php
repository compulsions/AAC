<?php
/* 
Template Name: Emprego
*/
    get_header();

    $cat_id = 15;

    query_posts('cat=' . $cat_id);

    include 'navbar.php';
    include 'slideshow.php';
    
    while (have_posts()) : the_post(); 
?>
    
    <section class="container">
        <div class="col-md-2 col-sm-2 col-xs-12 caixa_branca">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>
        
        <div class="col-md-9 col-sm-9 col-xs-12 caixa_branca">
            <?php 
                the_content('Mais informações..');
            ?>
        </div>
    </section>

<?php
    endwhile;
    wp_reset_query();

    get_footer();
?>

