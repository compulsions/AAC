<?php
/* 
Template Name: Républicas
*/
    get_header();

    include 'navbar.php';
    include 'slideshow.php';
?>
    
    <section class="container cor">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h2>Républicas</h2>
            <p>
                As suas origens remontam ao século XIV, quando D. Dinis, por diploma régio de 1309, promovia a construção de casas na zona de Almedina, destinadas a estudantes, mediante pagamento de um aluguer. O montante seria fixado por uma comissão, expressamente nomeada pelo Rei, constituída por estudantes e por “homens bons” da cidade. É assim que a partir de um tipo de alojamento comum, permitindo minimizar os encargos financeiros, viriam a surgir, por evolução, as actuais Repúblicas. Ainda hoje as “casas” caracterizam-se pela exaltação de valores universais que unem o passado ao presente: a vida em comunidade, a soberania e a democraticidade. As decisões são geralmente tomadas por unanimidade e todos os membros responsabilizados na gestão da “casa”.
            </p>
        </div>
    </section>

    <section class="containercentrar">
        <div class="col-md-5 col-sm-5 col-xs-12 republica carrega cor">
            one
        </div>
        
         <div class="col-md-5 col-md-offset-2 col-sm-5 col-xs-12 republica carrega cor">
            two
        </div>

    </section>



<?php
    wp_reset_query();

    get_footer();
?>

