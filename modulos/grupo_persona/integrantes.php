<?php 

conectar();
extract($_POST);

$buscar = mysql_query("SELECT id FROM grupo WHERE id=$ver");
if (mysql_num_rows($buscar)==0) {
  header('Location: ?id=principal');
}

$result = mysql_query("SELECT persona.id as id, persona.cedula as cedula, CONCAT (persona.nombre,' ',persona.apellido) as persona, persona.email as correo,grupo.nombre as grupo, grupo_persona.cargo as cargo FROM persona,grupo_persona,grupo WHERE persona.id=grupo_persona.persona_id AND grupo.id=$ver AND grupo_persona.grupo_id=$ver ORDER BY id ASC");
?>
<div class="body body">       
    <form action="" method="POST" id="login-form" class="sky-form">
        <header>
          <?php 
          $sql = mysql_query("SELECT nombre FROM grupo WHERE id=$ver ");
          $nombre = mysql_fetch_array($sql);
          echo $nombre['nombre'];

          ?>
        </header>
        

        
        <fieldset>       
            <table>
              <tbody>
                <?php

                $cont = 0;

                  while($row = mysql_fetch_array($result)){ 
                      $cont = $cont + 1;
                      echo "<tr>";
                      echo "<td><strong>".$cont." |</strong></td>";
                      echo "<td>".nl2br($row['persona'])."</td>";
                      echo "<td>".nl2br($row['cedula'])."</td>";
                      echo "<td>".nl2br($row['cargo'])."</td>";
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