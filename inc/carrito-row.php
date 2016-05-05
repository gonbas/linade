<?php for($i=1;$i<3;$i++):?>
<div class="row carrito-row">
    <div class="col-sm-2 fav-imagen">
        <a href="#">
            <img class="img-responsive" src="images/favorito-imagen.png"/>
        </a>
    </div>
    <div class="col-sm-5 fav-descripcion">
        <div class="titulo">Hay - About A Lounge Chair AAL 93</div>
        <div class="precio hidden-xs">$ 659.55</div>
    </div>
    <div class="col-sm-2 fav-cantidad">
        <div class="input-cantidad">
            <a class="menos" href="javascript:void(0);" onclick="inputCantidadAgregar(false,this);">-</a>
            <input type="text" class="form-control" value="1" />
            <a class="mas" href="javascript:void(0);" onclick="inputCantidadAgregar(true,this);">+</a>            
        </div>
    </div>
    <div class="col-sm-2 fav-precio">
        $ 659.55
    </div>
    <div class="col-sm-1 fav-botones">        
        <a href="javascript:void(0);" class="favorito-menos" onclick="removerFilaCarrito(this);"  data-toggle="tooltip" data-placement="top" title="Quitar del Carrito"/></a>
    </div>
</div>
<?php endfor;?>
<div class="clearfix"></div>