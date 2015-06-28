<?php
/* 
Template Name: DG
*/
  get_header();

    include 'navbar.php';
    include 'slideshow.php';

?>
    
    <section class="container">
        <div class="col-md-3 col-sm-3 col-xs-12 caixa_branca barralado">
            <ul>
                <?php
                $tags = get_tags();
                if ($tags) {
                    foreach ($tags as $tag) {
                        echo '<li><a href="' . get_tag_link ($tag->term_id) . '"> '. $tag->name . '</a></li>'; 
                    }
                }
            ?>
            </ul>
        </div>
        
        <div class="col-md-8 col-sm-8 col-xs-12 caixa_branca">
        CENAS
        </div>
    </section>

<?php
    wp_reset_query();

    get_footer();
?>

