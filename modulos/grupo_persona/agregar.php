        <div class="body">                  
            <form method="POST" action="?id=add_grupo_persona" id="incluir-persona" class="sky-form">
                <header>Incluir Persona en un grupo</header>
                
                <fieldset>
                    <div class="row">
                        <section class="col col-6">
                            <label class="label">Persona</label>
                            <label class="select">
                                <select name="persona">
                                    <option selected disabled>- Seleccionar -</option>
                                    <?php
                                    conectar();

                                    $sql="SELECT persona.id as id,CONCAT (persona.nombre,' ',persona.apellido) as persona FROM persona,admin WHERE persona.id NOT in (admin.persona_id)";
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
                        <section class="col col-12">
                            <label class="label">Grupo</label>
                            <label class="select">
                                <select name="grupo">
                                    <option selected disabled>- Seleccionar -</option>
                                    <?php
                                    conectar();

                                    $sql = "SELECT * FROM grupo";
                                    $consultainteres=mysql_query($sql);

                                    while ($row = mysql_fetch_assoc($consultainteres)) {

                                        $carrera = $row['nombre'];
                                        $grupo = substr($carrera, 0, 60);

                                        echo "<option value='".$row['id']."'>".$grupo."...</option>";
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
                            <label class="label">Cargo</label>
                            <label class="input">
                                <i class="icon-append fa fa-asterisk"></i>
                                <input type="text" name="cargo">
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