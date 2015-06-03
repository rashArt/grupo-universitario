<?php
conectar();

extract($_POST);

$email=addslashes($email);

$password=addslashes($password);


$sql="SELECT persona.id as id, persona.email as email, admin.nivel as nivel, admin.password as password FROM persona,admin WHERE persona.email = '$email' AND admin.password = '$password' AND persona.id=admin.persona_id";

if (!$result = mysql_query($sql)) 
{
    echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Error al iniciar sesion</strong></div>
                <script type='text/javascript'>
                    var pagina = '?id=index';
                    setTimeout('location.href=pagina',1000);
                </script>";
}else{

    $row = mysql_fetch_object($result);
    
    if($row){
    
            $result=mysql_query($sql);
            while($registro=mysql_fetch_array($result)){
                $_SESSION['id'] = $registro['id'];
                $_SESSION['nivel'] = $registro['nivel'];
            }
            echo "<div class='alert alert-success alert-dismissable'><strong>Se ha logueado con exito!</strong></div> 
            <script type='text/javascript'>
                var pagina = '?id=principal';
                setTimeout('location.href=pagina',1000);
            </script>";
    }else{
        echo "<div class='alert alert-warning alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Usuario o contraseña incorrecta</strong></div>
            <script type='text/javascript'>
                var pagina = '?id=index';
                setTimeout('location.href=pagina',1000);
            </script>";
    }

}

desconectar();
?>
