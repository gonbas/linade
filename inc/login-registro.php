<div class="inicio-registro">
    <div class="title">REGISTRATE</div>    
    <form id="form-registro">
        <div class="form-group">                            
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombre" required>
        </div>                 
        <div class="form-group">           
            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
        </div>
        <div class="form-group">            
            <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña">
        </div>
        <div class="form-group">           
            <input type="password" class="form-control" id="pass1" name="pass1" placeholder="Contraseña">
        </div> 
        <button type="submit" class="btn form-control">Registrarme</button>
        <div class="checkbox">
            <label class="label_check" >
                <input type="checkbox" name="condiciones" value="1" checked="checked"> He leído y acepto los términos y condiciones.
            </label>
        </div>         
        <div class="checkbox">
            <label  class="label_check" >
                <input type="checkbox" name="suscripcion" value="1" checked="checked"> Suscribirme al newsletter.
            </label>
        </div>         
    </form>   
    <script type="text/javascript">
        $("#form-registro").validate({
            rules: {
                email: {
                    required: true,
                    email: true
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