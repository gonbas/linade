<?php include('inc/head.php'); ?>
<div class="central-content">
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="/">Home</a> / Mi Carrito
                </div>
            </div>                
        </div>
    </div>
    <div class="titulo-pagina">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span>Mi Carrito</span>
                </div>
            </div>                
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="carrito-content">
                    <div class="inner">
                        <?php include('inc/carrito-row.php'); ?>  
                        <div class="carrito-cuenta">
                            <hr/>
                            <div class="row">
                                <div class="col-sm-6 left">
                                    <input type="text" class="form-control cupon" name="cupon" id="cupon" placeholder="Cupón de Descuento" required>

                                    <button class="btn chico-button">APLICAR</button>
                                </div>
                                <div class="col-sm-6 right">
                                    <button class="btn chico-button">Actualizar</button>
                                    <button class="btn invertido-button">PROCEDER A PAGAR</button>                                    
                                </div>
                            </div>
                            <?php include('inc/carrito-detalle.php'); ?>     
                        </div>                         
                    </div>
                </div> 
            </div>
        </div>       
    </div>
</div>
<?php include('inc/close.php'); ?>