<?php include('inc/head.php'); ?>
<div class="central-content">    
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="/">Home</a> / Mis Tickets
                </div>
            </div>                
        </div>
    </div>
    <div class="titulo-pagina">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span>Mis Tickets</span>
                </div>
            </div>                
        </div>
    </div>            
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mi-cuenta-content">
                    <div class="inner">
                        <?php for($i=1;$i<12;$i++):?>
                        <div class="row mis-tickets-row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-1 fav-imagen">                                
                                    <img class="img-responsive" src="images/mi-cuenta-tickets.png"/>                                
                            </div>
                            <div class="col-sm-6  fav-descripcion">
                                <div class="titulo">#0021546 JUN-15-15</div>                                
                            </div>
                            <div class="col-sm-2 fav-precio">
                                $ 659.55
                            </div>
                            <div class="col-sm-1 fav-botones">        
                                <a href="https://google.com/" target="_blank" class="favorito-mas"
                                 data-toggle="tooltip" data-placement="top" title="Abrir ticket"/></a>
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                        <?php endfor;?>
                        <div class="clearfix"></div>
                    </div>
                </div> 
            </div>
        </div>
    </div>

</div>
<?php include('inc/close.php'); ?>