        <div class="body">                  
            <form method="POST" action="?id=add_admin" id="agregar-admin" class="sky-form">
                <header>Agregar Persona como Administrador</header>
                
                <fieldset>
                    <div class="row">
                        <section class="col col-6">
                            <label class="label">Persona</label>
                            <label class="select">
                                <select name="persona">
                                    <option selected disabled>- Seleccionar -</option>
                                    <?php
                                    conectar();

                                    $sql="SELECT id,CONCAT (persona.nombre,' ',persona.apellido) as persona FROM persona";
                                    $consultainteres=mysql_query($sql);

                                    while ($row = mysql_fetch_assoc($consultainteres)) {

                                        $persona = $row['persona'];
                                        $name= utf8_encode($persona);

                                        echo "<option value='".$row['id']."'>".$name."</option>";
                                    }
                                    desconectar();
                                    ?>
                                </select>
                                <i></i>
                            </label>
                        </section>                      
                    </div>
                    <div class="row">
                        <section class="col col-6">
                          <label class="label">Constraseña</label>
                          <label class="input">
                            <i class="icon-append fa fa-lock"></i>
                            <input type="password" name="password" placeholder="Password" id="password">
                            <b class="tooltip tooltip-bottom-right">No se olvide de su contraseña</b>
                          </label>
                        </section>
                        
                        <section class="col col-6">
                          <label class="label">Confirmar</label>
                          <label class="input">
                            <i class="icon-append fa fa-lock"></i>
                            <input type="password" name="passwordConfirm" placeholder="Confirm password">
                            <b class="tooltip tooltip-bottom-right">No se olvide de su contraseña</b>
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