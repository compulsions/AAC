<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<?php

$link_to_previous;

echo "categoria desta página: " . $cat[0]->name;

foreach ($pages as $p) {
    //echo "<p>" . get_the_title( $pages[$i]->ID ) . '</p>';

    if ($cat[0]->name == get_the_title( $p->ID )) {
        echo "encontrei o escolhido!!<br>";
        echo get_page_link($pages[$i]->ID);
        $link_to_previous = get_page_link($p->ID);
    }
}

?>

<div class="container cor">
    <div class="tituloPag">

        <div class="row">
            <div class="col-sm-12">
                <a href=""><?php echo $cat->name; ?> <?php the_title(); ?></a>
            </div>

            <div class="col-sm-12">
                <a href="<?php echo $link_to_previous ?>" align="right" class ="botao_voltar">
                 VOLTAR
                </a>
            </div>

        </div>

    </div>
    <div class="col-md-3 info centrar">


    <?php

        if (have_posts()) :
            while (have_posts()) : the_post();
            echo get_the_post_thumbnail( $post->ID, 'thumbnail', array('width' => '90%'));
            $link = 'https://www.facebook.com/';
            $link_twitter = 'https://www.twitter.com/';

         ?>
        <div>
        <a href="<?php echo $link; ?>" taget="_blank"><i class="fa fa-facebook-official"></i> Facebook</div></a>
        <div>
         <a href="<?php echo $link; ?>" taget="_blank"><i class="fa fa-twitter"></i> Twitter</div></a>

    </div>
    <div class="col-md-8 borderesquerda noticia-cobaia">
        <p>
            <?php the_content(); ?>
        </p>

        <?php

            endwhile;

            else :
                echo '<p>No content found</p>';

        endif;
        ?>

    </div>

</div>
