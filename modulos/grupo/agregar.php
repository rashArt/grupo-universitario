        <div class="body">                  
            <form method="POST" action="?id=add_grupo" id="agregar-grupo" class="sky-form">
                <header>Agregar grupo</header>
                
                <fieldset>
                    <div class="row">
                        <section class="col col-10">
                            <label class="label">Nombre de Grupo</label>
                            <label class="input">
                                <i class="icon-append fa fa-asterisk"></i>
                                <input type="text" name="nombre">
                            </label>
                        </section>                     
                    </div>
                </fieldset>
                
                <footer>
                    <button type="submit" class="button">Submit</button>
                    <button type="button" class="button button-secondary" onclick="window.history.back();">Back</button>
                </footer>
            </form>
        </div>