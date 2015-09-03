<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<div class="container cor">
    <div class="tituloPag">

        <div class="row">
            <div class="col-sm-12">
                <a href=""><?php the_title(); ?></a>
            </div>

            <div class="col-sm-12">

            </div>

        </div>

    </div>
    <div class="col-md-3 info centrar">
        <?php
        if (has_post_thumbnail()) {
            echo get_the_post_thumbnail( $post->ID, 'thumbnail', array('width' => '90%'));
        }?>

    <?php

        if (have_posts()) :
            while (have_posts()) : the_post(); ?>

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
