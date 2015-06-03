<div class="body body-x">       
    <div class="sky-form">
        <header>Lista de Grupos</header>
        
        <fieldset>       
            <table>
                  <tbody class="text-uppercase">
                    <?php 
                      conectar();
                      $result = listar('grupo');

                      while($row = mysql_fetch_array($result)){ 

                          echo "<tr>";
                          echo "<td>
                                <strong>".nl2br($row['nombre'])."</strong>
                                </td>";
                          
                          echo "<td>
                                <form class='sky-form' method='POST' action='?id=ver_integrantes'>
                                  <input type='hidden' name='ver' value=".utf8($row['id']).">
                                  <button type='submit' class='button-r1'>Integrantes</button>
                                </form>
                              </td>";
                          echo "</tr>";
                      }
                   ?> 
                  </tbody>             
            </table>
        </fieldset>
        <footer>
            <!-- <button type="submit" class="button">Entrar</button> -->
            <button type="button" class="button button-secondary" onclick="window.history.back();">Back</button>
        </footer>
    </div>         
</div>