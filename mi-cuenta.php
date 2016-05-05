<?php include('inc/head.php'); ?>
<div class="central-content">    
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="/">Home</a> / Mi Cuenta
                </div>
            </div>                
        </div>
    </div>
    <div class="titulo-pagina">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span>Mi cuenta</span>
                </div>
            </div>                
        </div>
    </div>            
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mi-cuenta-content">
                    <div class="inner">
                        <div class="mi-cuenta-navegacion">
                            <div class="mi-cuenta-navegacion-item color-favoritos">
                                <a href="favoritos.php">
                                    <img src="images/mi-cuenta-favoritos.png" class="img-responsive"/>
                                </a>
                                <a href="favoritos.php">
                                    FAVORITOS
                                </a>                                
                            </div>
                            <div class="mi-cuenta-navegacion-item color-tickets">
                                <a href="tickets.php">
                                    <img src="images/mi-cuenta-tickets.png" class="img-responsive"/>
                                </a>
                                <a href="tickets.php">
                                    TICKETS
                                </a>                                 
                            </div>
                            <?php /*
                            <div class="mi-cuenta-navegacion-item color-resenas">
                               <a href="resena.php">
                                   <img src="images/mi-cuenta-resena.png" class="img-responsive"/>
                                </a>
                                <a href="resena.php">
                                    RESEÑAS
                                </a>                                 
                            </div>
                            */?>
                            <div class="clearfix"></div>
                        </div>
                        <?php include('inc/mi-cuenta-form.php');?>
                    </div>
                </div> 
            </div>
        </div>
    </div>

</div>
<?php include('inc/close.php'); ?>