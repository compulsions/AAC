<?php
/* 
Template Name: DG
*/
  get_header();

    include 'navbar.php';
    include 'slideshow.php';

?>
    
    <section class="container">
        <div class="col-md-3 col-sm-3 col-xs-12 caixa_branca barralado carrega">
            <ul>
                <?php
                query_posts('cat=14');
                if (have_posts()) : while (have_posts()) : the_post();
                    if( get_the_tag_list() ){
                        echo $posttags = get_the_tag_list('<li>','</li><li>','</li>');
                    }

                endwhile; endif; 
                wp_reset_query();
                ?>
            </ul>
        </div>
        
        <div class="col-md-8 col-sm-8 col-xs-12 caixa_branca">
        CENAS
        </div>
    </section>

<?php
    get_footer();
?>

