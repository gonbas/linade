<div class="producto-detalle-top-precio">
    $2999.00
</div>
<div class="producto-detalle-top-rating">
    <input id="rating" name="rating" class="rating" data-min="0" data-max="5" data-step="0.1" value="3.9" data-readonly="true" data-symbol="&#xf006;&nbsp;" data-glyphicon="false"  data-rating-class="rating-fa" >
    <div class="producto-rating">3.9/5.0</div>
    <div class="clearfix"></div>
    <script>
        $("#rating").rating({
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
</div>
<div class="producto-detalle-top-pedir">
    <div class="row">
        <div class="col-md-6">
            <div class="input-color">
                <select id="colorselector" name="color">
                    <option value="1" data-color="#FFF" >Blanco</option>
                    <option value="106" data-color="#A0522D">Marron</option>
                    <option value="47" data-color="#c10d2b" selected="selected">Rojo</option>
                    <option value="87" data-color="#FF4500">Naranja</option>
                    <option value="99" data-color="#fffb85">Amarillo</option>
                </select>
                <span id="colorTitle">Rojo</span>
            </div>
            <script>
                $('#colorselector').colorselector({
                    callback: function (value, color, title) {
                        $("#colorTitle").html(title);
                    }
                });
            </script>              
        </div>
        <div class="col-md-6">
            <div class="input-cantidad">
                <a class="menos" href="javascript:void(0);" onclick="inputCantidadAgregar(false, this);">-</a>
                <input type="text" class="form-control" value="1" />
                <a class="mas" href="javascript:void(0);" onclick="inputCantidadAgregar(true, this);">+</a>            
            </div>            
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="content-agregar-carrito">
                <button class="btn agregar-al-carrito invertido-button">+ AÑADIR AL CARRITO</button>
            </div>            
        </div>
    </div>    
    <div class="row">
        <div class="col-md-12">
            <div class="content-agregar-favoritos">
                <a href="/favoritos.php" class="link-agregar-favoritos"><i class="fa fa-heart-o"></i> AGREGAR A FAVORITOS</a>
            </div>
        </div>
    </div>
</div>    
    <div class="row">
        <div class="col-md-12">
            <div class="descripcion">
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore Beatae vitae dicta sunt explicabo.                 
            </div>
        </div>
    </div>    
