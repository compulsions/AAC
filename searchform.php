<form action="<?php echo home_url(); ?>" id="search-form" method="get">
    <input type="text" name="s" id="s" value="Pesquisa" onblur="if(this.value=='')this.value='Pesquisa'"
    onfocus="if(this.value=='Pesquisa')this.value=''" />
    <input class ="botao_pesquisa" type="submit" value="Pesquisa" />
</form>