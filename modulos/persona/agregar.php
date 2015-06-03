    <div class="body">                  
        <form method="POST" action="?id=add_persona" id="agregar-persona" class="sky-form">
            <header>Agregar Nueva Persona</header>
            
            <fieldset>
                <div class="row">
                    <section class="col col-6">
                        <label class="label">Cedula</label>
                        <label class="input">
                            <i class="icon-append fa fa-asterisk"></i>
                            <input type="text" name="cedula">
                        </label>
                    </section>
                    <section class="col col-6">
                        <label class="label">Nombre</label>
                        <label class="input">
                            <i class="icon-append fa fa-asterisk"></i>
                            <input type="text" name="nombre">
                        </label>
                    </section>                        
                </div>
                
                <div class="row">
                    <section class="col col-6">
                        <label class="label">Apellido</label>
                        <label class="input">
                            <i class="icon-append fa fa-asterisk"></i>
                            <input type="text" name="apellido">
                        </label>
                    </section>
                   <section class="col col-6">
                        <label class="label">Correo</label>
                        <label class="input">
                            <i class="icon-append fa fa-envelope"></i>
                            <input type="email" name="email">
                        </label>
                    </section>
                </div>
                
                <div class="row">
                    <section class="col col-6">
                        <label class="label">Telefono</label>
                        <label class="input">
                            <i class="icon-append fa fa-asterisk"></i>
                            <input type="text" name="telefono">
                        </label>
                    </section>
                    <section class="col col-6">
                        <label class="label">Genero</label>
                        <label class="select">
                            <select name="genero">
                                <option selected disabled>- Seleccionar -</option>
                                <option value="1">Femenino</option>
                                <option value="2">Masculino</option>
                            </select>
                            <i></i>
                        </label>
                    </section>
                </div>
                <div class="row"> 
                    <section class="col col-8">
                        <label class="label">Carrera</label>
                        <label class="select">
                            <select name="carrera">
                                <option selected disabled>- Seleccionar -</option>
                                <?php
                                conectar();

                                $sql="SELECT id,nombre FROM carrera";
                                $consultainteres=mysql_query($sql);

                                while ($row = mysql_fetch_assoc($consultainteres)) {

                                    $carrera = $row['nombre'];

                                    echo "<option value='".$row['id']."'>".$carrera."</option>";
                                }
                                desconectar();
                                ?>
                            </select>
                            <i></i>
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