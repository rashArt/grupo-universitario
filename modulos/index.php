<div class="body body-s">
    <form action="?id=entrar" method="POST" id="login-form" class="sky-form">
        <header>Grupo Universitario</header>

        <fieldset>
            <section><div id="respuesta"></div></section>
            <section>
                <div class="row">
                    <label class="label col col-4">correo</label>
                    <div class="col col-8">
                        <label class="input">
                            <i class="icon-append fa fa-user"></i>
                            <input type="email" name="email">
                        </label>
                    </div>
                </div>
            </section>

            <section>
                <div class="row">
                    <label class="label col col-4">Contrseña</label>
                    <div class="col col-8">
                        <label class="input">
                            <i class="icon-append fa fa-lock"></i>
                            <input type="password" name="password">
                        </label>
                        <!-- <div class="note"><a href="#sky-form2" class="modal-opener">Forgot password?</a></div> -->
                    </div>
                </div>
            </section>

            <section>
                <div class="row">
                    <div class="col col-4"></div>
                    <div class="col col-8">
                        <label class="checkbox"><input type="checkbox" name="remember" checked><i></i>Recordar Sesión</label>
                    </div>
                </div>
            </section>
        </fieldset>
        <footer>
            <button type="submit" class="button">Entrar</button>
            <!-- <a href="#" class="button button-secondary">Register</a> -->
        </footer>
    </form>
</div>
<script>
    $("#login-form").submit(function() {
        $.post($(this).attr("action"), $(this).serialize(), function(data) {
            $("#respuesta").html(data);
        });
        return false;
    });
</script>



<!-- <form action="demo-login-process.php" id="sky-form2" class="sky-form sky-form-modal">
    <header>Password recovery</header>

    <fieldset>
        <section>
            <label class="label">E-mail</label>
            <label class="input">
                <i class="icon-append fa fa-envelope-o"></i>
                <input type="email" name="email" id="email">
            </label>
        </section>
    </fieldset>

    <footer>
        <button type="submit" name="submit" class="button">Submit</button>
        <a href="#" class="button button-secondary modal-closer">Close</a>
    </footer>

    <div class="message">
        <i class="icon-ok"></i>
        <p>Your request successfully sent!<br><a href="#" class="modal-closer">Close window</a></p>
    </div>
</form> -->