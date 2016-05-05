<div class="cambiar-direccion">
    <div class="title">MI DIRECCIÓN</div>    
    <form id="form-direccion" class="form-inline">
        <?php include("mi-cuenta-direccion-basic-fields.php");?>
        <div class="form-group cont-submit">
            <label for="exampleInputEmail1"> </label>        
            <button type="submit" class="btn form-control">Actualizar</button>       
        </div>
    </form>                  
    <script type="text/javascript">    
        $("#form-direccion").validate({
            rules: {
                direccion: {
                    required: true
                },
                pais: {
                    required: true
                },
                provincia: {
                    required: true
                },
                localidad: {
                    required: true
                },
                inputTelefono: {
                    required: true
                },                                                                
                inputCp: {
                    required: true,
                    digits: true
                }
            }
        });    
    </script>      
</div>