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

    $titulo = get_the_title();

    include 'navbar.php';
    include 'slideshow.php';
?>
    
    <section class="container carrega cor">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h2> Pesquisa </h2>

            <?php 
        
            get_search_form();

            global $wp_query;
            $total_results = $wp_query->found_posts;
            ?>
            
        </div>
    </section>

<?php
    wp_reset_query();

    get_footer();
?>

