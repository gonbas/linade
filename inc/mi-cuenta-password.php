<div class="cambiar-password">
    <div class="title">CAMBIAR CONTRASEÑA</div>    
    <form id="form-password">
        <div class="form-group">            
            <input type="password" class="form-control" id="passold" name="passold" placeholder="Contraseña Actual">
        </div>
        <div class="form-group">            
            <input type="password" class="form-control" id="pass" name="pass" placeholder="Nueva Contraseña">
        </div>
        <div class="form-group">           
            <input type="password" class="form-control" id="pass1" name="pass1" placeholder="Nueva Contraseña">
        </div> 
        <button type="submit" class="btn form-control">Actualizar</button>       
    </form>   
    <script type="text/javascript">
        $("#form-password").validate({
            rules: {
                passold: {
                    required: true,
                    verificaPasswordVieja: true
                },
                pass: {
                    required: true,
                    equalTo: "#pass1",
                    verificaPassword: true
                },
                pass1: {
                    required: true,
                }
            }
        });
    </script>                    
</div>