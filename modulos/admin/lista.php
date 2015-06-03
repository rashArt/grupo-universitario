<div class="body body">       
    <form action="" method="POST" id="login-form" class="sky-form">
        <header>Lista de Administradores</header>
        
        <fieldset>       
            <table>
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Cedula</th>
                      <th>Nombre y Apellido</th>
                      <th>Correo</th>
                      <th><i class="fa fa-pencil"></i></th>
                      <th><i class="fa fa-trash-o"></i></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      conectar();
                      $result = mysql_query("SELECT persona.id as id, persona.cedula as cedula, CONCAT (persona.nombre,' ',persona.apellido) as persona, persona.email as correo FROM persona,admin WHERE persona.id=admin.persona_id ORDER BY id DESC LIMIT 10");

                      while($row = mysql_fetch_array($result)){ 
                        foreach($row AS $key => $value) { $row[$key] = stripslashes($value); }
                          $cont = $cont + 1;
                          $row[''] = utf8($row['']);
                          echo "<tr>";
                          echo "<td>".$cont."</td>";
                          echo "<td>".nl2br($row['cedula'])."</td>";
                          echo "<td>".nl2br($row['persona'])."</td>";
                          echo "<td>".nl2br($row['correo'])."</td>";
                          
                          echo "<td>
                                <form class='sky-form' method='POST' action='?id=editar_admin'>
                                  <input type='hidden' name='update' value=".$row['id'].">
                                  <button type='submit' class='button-r1'><i class='fa fa-pencil'></i></button>
                                </form>
                              </td>";
                          echo "<td>
                                <form class='sky-form' method='POST' action='?id=eliminar_admin'>
                                  <input type='hidden' name='delete' value=".$row['id'].">
                                  <button type='submit' class='button-r2'><i class='fa fa-trash-o'></i></button>
                                </form>
                              </td>";
                          echo "</tr>";
                      }
                      desconectar();
                   ?> 
                  </tbody>             
            </table>
        </fieldset>
        <footer>
            <!-- <button type="submit" class="button">Entrar</button> -->
            <button type="button" class="button button-secondary" onclick="window.history.back();">Back</button>
        </footer>
    </form>         
</div>