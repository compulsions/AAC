<?php
/* 
Template Name: Pesquisa
*/

    global $query_string;

    $query_args = explode("&", $query_string);
    $search_query = array();

    foreach($query_args as $key => $string) {
        $query_split = explode("=", $string);
        $search_query[$query_split[0]] = urldecode($query_split[1]);
    } // foreach

    $search = new WP_Query($search_query);

    get_header();    

    include 'navbar.php';
    include 'slideshow.php';

    if ( have_posts() ) :
?>
    
    <section class="container carrega cor">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h2> <?php printf( __( 'Resultados da pesquisa sobre: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?> </h2>
            
            <?php while ( have_posts() ) : the_post(); ?>

            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
             
            
            <?php
             endwhile;

             else : ?>
            
                <h3><?php echo "Não há resultados"; ?></h3>  
           
    <?php endif; ?>
            
            
        </div>
    </section>

<?php
    wp_reset_query();

    get_footer();
?>

