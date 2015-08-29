<?php
/* 
Template Name: Texto 12
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
            <div id="mapa1" class="mapa">
                 <p><div id="mapa-1" style="height:150px;"></div></p>
           </div>      
        </div>
    </section>

<script>
          function initialize() {

            var lat =40.2097066;
            var lon = -8.4211913;

            var LatLng =new google.maps.LatLng(lat,lon);
            var mapCanvas = document.getElementById('mapa-1');

            var mapOptions = {
              center: LatLng , 
              zoom: 16,
              mapTypeId: google.maps.MapTypeId.ROADMAP,
              keyboardShortcuts: false,
              streetViewControl: false,
              mapTypeControl: false
            };
            var map = new google.maps.Map(mapCanvas, mapOptions);
                   

            var marker = new google.maps.Marker({
                position: LatLng ,
                map: map,
                title: 'Coimbra'
            });
            marker.setIcon('img/aac2.png');
            marker.setMap(map);1
         }
         }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
<?php
    wp_reset_query();

    get_footer();
?>

