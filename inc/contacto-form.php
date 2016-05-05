<div class="form-contacto">    
    <form id="form-contacto">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">                            
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre y Apellido" required>
                </div>                     
            </div>
        </div>          
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">                            
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>                     
            </div>
        </div> 
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">                            
                    <input type="text" class="form-control" name="asunto" id="asunto" placeholder="Asunto" required>
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


        <button type="submit" class="btn form-control">Enviar</button>         
    </form>   
    <script type="text/javascript">
        $("#form-contacto").validate({
            rules: {
                nombre: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true
                },
                asunto: {
                    required: true,
                },
                mensaje: {
                    required: true,
                }
            }
        });
    </script>                    
</div>