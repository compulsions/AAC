<?php
/*
Template Name: DG
*/
  get_header();

    include 'navbar.php';
    include 'slideshow.php';

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

         // <div class="col-sm-3 col-xs-12 caixa_branca barralado carrega">
   		$cat_id = $cat->term_id;
   	}
   }


   //Mostra todas as páginas dessa categoria
   query_posts(array('cat' =>$cat_id, 'posts_per_page' => -1));
?>

<section>
   <div class="container padding">
      <div class="row">

         <div class="col-sm-3 col-xs-12 barralado carrega">
            <div class="cor">


            <ul>
               <?php
               if (have_posts()) {
                  while (have_posts()) : the_post(); ?>

                     <li><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></li>

                  <?php endwhile;
               }

               wp_reset_query();
               ?>

            </ul>
            </div>
         </div>

         <div class="col-sm-9 col-xs-12 corpolado">
            <div class="cor">
               <?php
               if (have_posts()) {
                  while (have_posts()) : the_post();
                     the_content();
                  endwhile;
               }
               ?>
            </div>

         </div>

      </div>
   </div>

</section>

<?php
   get_footer();
?>
