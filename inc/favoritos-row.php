<?php for($i=1;$i<6;$i++):?>
<div class="row favorito-row">
    <div class="col-sm-2 fav-imagen">
        <a href="#">
            <img class="img-responsive" src="images/favorito-imagen.png"/>
        </a>
    </div>
    <div class="col-sm-6 fav-descripcion">
        <div class="titulo">Hay - About A Lounge Chair AAL 93</div>
        <div class="precio hidden-xs">$ 659.55</div>
    </div>
    <div class="col-sm-2 fav-precio">
        $ 659.55
    </div>
    <div class="col-sm-2 fav-botones">
        <a href="javascript:void(0);" class="favorito-mas" data-toggle="tooltip" data-placement="top" title="Agregar al Carrito"/></a>
        <a href="javascript:void(0);" class="favorito-menos" onclick="removerFilaFavoritos(this);"  data-toggle="tooltip" data-placement="top" title="Quitar de Favoritos"/></a>
    </div>
</div>
<?php endfor;?>
<div class="clearfix"></div>