<?php include('inc/head.php'); ?>
<div class="central-content">    
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="/">Home</a> / Checkout
                </div>
            </div>                
        </div>
    </div>
    <div class="titulo-pagina">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span>Checkout</span>
                </div>
            </div>                
        </div>
    </div>            
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="checkout-content">
                    <div class="inner">
                        
                        <div class="checkout-content-direccion">
                        <?php include('inc/checkout-direccion-form.php');?>
                        </div>
                        <div class="checkout-content-productos">
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-10">                            
                                <div class="title">Pedido</div>
                                <?php include('inc/checkout-productos.php'); ?> 
                                </div>
                                <div class="col-sm-1"></div>
                             </div>                             
                        </div>
                        <div class="checkout-content-detalle">
                            <div class="row">
                                <div class="col-sm-5"></div>
                                <div class="col-sm-6">
                                    <?php include('inc/checkout-detalle.php'); ?> 
                                </div>
                                <div class="col-sm-1"></div>
                             </div>   
                        </div>
                        <div class="checkout-content-medios-pagos">
                            <div class="title">MEDIO DE PAGO</div>

                                    <?php include('inc/checkout-pagos.php'); ?>
                        </div>
                        <div class="checkout-content-medios-pagar">                            
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-10">
                                    <div class="row">
                                    <label  class="label_radio">
                                        <input type="radio"    name="terminos" value="1" checked="checked">
                                        He leído y acepto los términos y condiciones.
                                    </label>
                                    <button class="btn invertido-button-lg" >Comprar</button>
                                    </div>
                                </div>
                                <div class="col-sm-1"></div>
                             </div>   
                        </div>                        



                    </div>
                </div> 
            </div>
        </div>
    </div>

</div>
<?php include('inc/close.php'); ?>