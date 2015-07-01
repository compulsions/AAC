<?php
/* 
Template Name: Emprego
*/
    get_header();

    $cat_id;
    $cats = get_categories( );

    $custom_value = get_post_custom_values('categoria');
    //echo "Custom value desta página: " . $custom_value[0] . "<br>";
    //print_r($cats);

    // ir ver a variável que a página passa
    // comparar com os nomes das categorias
    // só mostrar os posts dessa categoria

    foreach ($cats as $cat) {
        //echo "ID: " . $cat->term_id . " Nome: ". $cat->name . "<br>";

        if ($cat->name == $custom_value[0]) {
            //echo "ENCONTREI-O!<br>";
            //echo "ESCOLHIDO - >ID: " . $cat->cat_id . " Nome: ". $cat->name . "<br>";
            $cat_id = $cat->term_id;
        }
    }

    query_posts('cat=' . $cat_id);

    include 'navbar.php';
    include 'slideshow.php';
    
    while (have_posts()) : the_post(); 
?>
    
    <section class="container">
        <div class="col-md-2 col-sm-2 col-xs-12 carrega caixa_branca">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>
        
        <div class="col-md-9 col-sm-9 col-xs-12 carrega caixa_branca">
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

