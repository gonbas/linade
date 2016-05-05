<div class="inicio-session">
    <div class="title">LOG IN</div>
    <form id="form-login">
        <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
        </div>
        <div class="form-group">                            
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <button type="submit" class="btn form-control">Ingresar</button>
        <div class="form-group footer">
            <a href="#"> ¿Olvidste tu contraseña?</a>
        </div>                                        

    </form>
    <script type="text/javascript">
        $("#form-login").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    verificaPassword: true
                }
            }
        });
    </script>                     
</div>