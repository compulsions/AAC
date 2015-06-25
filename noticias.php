<?php 

	get_header();

	if (have_posts()) :
		while (have_posts()) : the_post() ?>

	<article>
		<h2><a href=" <?php the_permalink(); ?>"><?php the_title( ); ?></a></h2>
		<?php the_content( ); ?>
	</article>

	<?php endwhile;

	else:
		echo "<p>No content Found</p>";
	endif; ?>

    <article>
        <div id="category">
            <?php
                $tags = get_tags();
                echo "tags: ";
                if ($tags) {
                    foreach ($tags as $tag) {
                        echo '<br><a href="' . get_tag_link ($tag->term_id) . '"> '. $tag->name . '</a>'; 
                    }
                }
 
            ?>
        </div>
    </article>


    <?php

	get_footer( );
?>