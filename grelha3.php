<?php
/* 
Template Name: texto 12
*/
    get_header();

    $titulo = get_the_title();

    include 'navbar.php';
    include 'slideshow.php';
?>
    
    <section class="container carrega cor">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h2><?php echo $titulo ?></h2>
            <?php 

                $page = get_page_by_title($titulo);
                $content = apply_filters('the_content', $page->post_content); 
                echo $content;
            ?>
        </div>
    </section>

<?php
    wp_reset_query();

    get_footer();
?>

