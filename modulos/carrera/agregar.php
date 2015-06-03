        <div class="body">                  
            <form method="POST" action="?id=add_carrera" id="agregar-carrera" class="sky-form">
                <header>Agregar Carrera-Sede</header>
                
                <fieldset>
                    <div class="row">
                        <section class="col col-10">
                            <label class="label">Ingrese la Carrera y su Sede</label>
                            <label class="input">
                                <i class="icon-append fa fa-asterisk"></i>
                                <input type="text" name="carrera">
                            </label>
                            <div class="note"><strong>Nota:</strong> Escriba el nombre de la carrera seguido de un guin simple y coloque la sede de la carrera para mejor organizacion <br> <strong>Ejemplo:</strong> Ing. Informática - San Juan de los Morros</div>
                        </section>                     
                    </div>
                </fieldset>
                
                <footer>
                    <button type="submit" class="button">Submit</button>
                    <button type="button" class="button button-secondary" onclick="window.history.back();">Back</button>
                </footer>
            </form>
        </div>