<div class="body">
    <div class="sky-form">
        <header>
          
<?php 
    
    extract($_POST);
    conectar();

    // consulta para que no se repitan las personas por numero de cedula
    $sql=mysql_query("SELECT nombre FROM grupo WHERE nombre ='$nombre'");

    if (mysql_num_rows($sql)>0) {
        echo " <div class='alert alert-warning alert-dismissable'><strong>Este grupo ya se encuentra registrado!</strong></div>";
    }else{
        $insertar=mysql_query("INSERT INTO grupo (nombre) VALUES ('$nombre')");

        if (mysql_affected_rows($insertar) > 0){
            echo "<div class='alert alert-danger alert-dismissable'><strong>No se pudieron guardar los datos!</strong></div>";
        }
        else{
            echo "<div class='alert alert-success alert-dismissable'><strong>Se han guardado los datos exitosamente!</strong></div>";
        }

    }
    desconectar();

?>

        </header>
        <footer>
            <button type="button" class="button button-secondary" onclick="window.history.back();">Agregar <i class="fa fa-plus"></i></button>
            <a href="?id=principal" class="button button-primary">Inicio</a>
        </footer>
    </div>
</div>