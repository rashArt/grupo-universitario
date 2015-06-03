<?php 

function conectar()
{
    mysql_connect("localhost", "root", "toor");
    mysql_select_db("grupo_universitario");
}

function desconectar()
{
    mysql_close();
}

function listar($tabla)
{
    $consulta=mysql_query("SELECT * FROM $tabla ORDER BY id DESC LIMIT 10");
    if (mysql_num_rows($consulta) > 0){
        return $consulta;
    }
    else{
        echo "<div class='alert alert-danger alert-dismissable'><strong>No se obtuvieron los datos!</strong></div>";
    }
}

function utf8($var)
{
  $contenido= utf8_encode($var);
  return $contenido;
}






?>