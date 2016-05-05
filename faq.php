<?php include('inc/head.php'); ?>
<div class="central-content">    
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="/">Home</a> / FAQ
                </div>
            </div>                
        </div>
    </div>
    <div class="titulo-pagina">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span>FAQ</span>
                </div>
            </div>                
        </div>
    </div>            
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="faq-content">
                    <div class="inner">
                        <?php for($i=1;$i<12;$i++):?>
                        <div class="row faq-row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-9  fav-descripcion">
                                <div class="titulo">Que Vendemos?</div>                                
                            </div>
                            <div class="col-sm-1 fav-botones">        
                                <a  id="btnfaqId<?php echo $i;?>"
                                    class="favorito-mas" 
                                    role="button" 
                                    data-toggle="collapse" 
                                    href="#faqId<?php echo $i;?>" 
                                    aria-expanded="true" 
                                    aria-controls="faqId<?php echo $i;?>"/></a>
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                        <div class="row faq-row-respuesta collapse" id="faqId<?php echo $i;?>">
                          <div class="fix">
                            <p>Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. <br/>
Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean 
</p>
                          </div>
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
