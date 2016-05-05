<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active">
        <a href="#tabdescripcion" aria-controls="tabdescripcion" role="tab" data-toggle="tab">Descripción</a>
    </li>
    <li role="presentation">
        <a href="#tabresena" aria-controls="tabresena" role="tab" data-toggle="tab">Reseñas</a>
    </li>
</ul>
<div class="tab-content">
    <div role="tabpanel" class="tab-pane tabdescripcion active" id="tabdescripcion">
        <div class="row">
            <div class="col-md-6">
                <p>Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>

                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>                 
            </div>
            <div class="col-md-6">
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, <br/>ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. </p>                 
            </div>            
        </div> 
    </div>
    <div role="tabpanel" class="tab-pane tabresena" id="tabresena">

        <?php for($i=1;$i<4;$i++):?>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="row">
                    <div class="col-md-4"><input id="rating" name="rating" class="rating resena-rating" data-min="0" data-max="5" data-step="0.1" value="3" data-readonly="true" data-symbol="&#xf006;&nbsp;" data-glyphicon="false"  data-rating-class="rating-fa" ></div>
                    <div class="col-md-8">
                        <div class="resena-titulo--rating">PRÁCTICO Y DE BUENA CALIDAD!
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="autor">por Gonzalo Bas</div>
                        <div class="texto-resenia">
                            Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis partturient montes, nascetur ridiculus mus.

                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                        </div>
                    </div>
                </div>                
            </div>
        </div>        
        <div class="separador-resena"></div>
        <?php endfor;?>
        
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="row">
                    <div class="col-md-12">
                        <hr/>
                        <h2 class="title">Dejar Reseña</h2>
                        <div class="form-resena">    
                            <form id="form-resena">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"> 
                                            <label></label>                           
                                             <input id="ratingResena" name="ratingResena" class="ratingResena" data-min="0" data-max="5" data-step="0.1" value="5"  data-symbol="&#xf006;&nbsp;" data-glyphicon="false"  data-rating-class="rating-fa" >
                                        </div>                     
                                    </div>
                                </div>          
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">                            
                                            <input type="text" class="form-control" name="asunto" id="asunto" placeholder="Título" required>
                                        </div>                     
                                    </div>
                                </div>           
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">                            
                                            <textarea class="form-control" rows="3" id="mensaje" name="mensaje" placeholder="Mensaje"></textarea>
                                        </div>                     
                                    </div>

                                </div>               
                                <button type="submit" class="btn form-control">Publicar</button>         
                            </form>                       
                        </div>
                    </div>
                </div>                
            </div>
        </div>   

    </div>
</div>
<script>
    $(".resena-rating").rating({
        stars: 5,
        glyphicon: true,
        symbol: null,
        ratingClass: '',
        disabled: false,
        readonly: false,
        rtl: false,
        size: 'xs',
        showClear: false,
        showCaption: false,
        defaultCaption: '{rating}',
        starCaptions: {
            1: '1',
            2: '2',
            3: '3',
            4: '4',
            5: '5'
        },
        starCaptionClasses: {
            1: 'label label-danger',
            2: 'label label-warning',
            3: 'label label-info',
            4: 'label label-primary',
            5: 'label label-success'
        },
        clearButton: '<i class="glyphicon glyphicon-minus-sign"></i>',
        clearButtonTitle: 'Clear',
        clearButtonBaseClass: 'clear-rating',
        clearButtonActiveClass: 'clear-rating-active',
        clearCaption: false,
        clearCaptionClass: 'label label-default',
        clearValue: null,
        captionElement: null,
        clearElement: null,
        containerClass: null,
    });
</script>  
    <script>
        $("#ratingResena").rating({
            stars: 5,
            glyphicon: true,
            symbol: null,
            ratingClass: '',
            disabled: false,
            readonly: false,
            rtl: false,
            size: 'xs',
            showClear: false,
            showCaption: true,
            defaultCaption: '{rating}',
            starCaptions: {
                1: '1',
                2: '2',
                3: '3',
                4: '4',
                5: '5'
            },
            starCaptionClasses: {
                1: 'label label-danger',
                2: 'label label-warning',
                3: 'label label-info',
                4: 'label label-primary',
                5: 'label label-success'
            },
            clearButton: '<i class="glyphicon glyphicon-minus-sign"></i>',
            clearButtonTitle: 'Clear',
            clearButtonBaseClass: 'clear-rating',
            clearButtonActiveClass: 'clear-rating-active',
            clearCaption: false,
            clearCaptionClass: 'label label-default',
            clearValue: null,
            captionElement: null,
            clearElement: null,
            containerClass: null,
        });
    </script>