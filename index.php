<?php
session_start();
include("estaticos/base/header.php");
include("modulos/funciones/funciones.php");




  if(!$_GET){
      echo "<meta http-equiv='refresh' content='0,?id=index'>";
  }
  else if($_GET['id']=="index") {
      if ($_SESSION && $_SESSION['nivel']==1) {
          include ("modulos/principal.php");
      }else {
          include ("modulos/index.php");
      }
  }
  else if ($_GET['id']=="principal" && $_SESSION['nivel']==1) {
      include ("modulos/principal.php");
  }

// Modulo de Carrera
  else if ($_GET['id']=="agregar_carrera" && $_SESSION['nivel']==1) {
      include ("modulos/carrera/agregar.php");
  }
  else if ($_GET['id']=="lista_carrera" && $_SESSION['nivel']==1) {
      include ("modulos/carrera/lista.php");
  }
  else if ($_GET['id']=="add_carrera" && $_SESSION['nivel']==1) {
      include ("modulos/carrera/add.php");
  }

// Modulo de Persona
  else if ($_GET['id']=="agregar_persona" && $_SESSION['nivel']==1) {
      include ("modulos/persona/agregar.php");
  }
  else if ($_GET['id']=="lista_persona" && $_SESSION['nivel']==1) {
      include ("modulos/persona/lista.php");
  }
  else if ($_GET['id']=="add_persona" && $_SESSION['nivel']==1) {
      include ("modulos/persona/add.php");
  }

// Modulo de Persona incluida en Grupo        ADMINISTRACION
  else if ($_GET['id']=="incluir_persona" && $_SESSION['nivel']==1) {
      include ("modulos/grupo_persona/agregar.php");
  }
  else if ($_GET['id']=="detalles_grupo" && $_SESSION['nivel']==1) {
      include ("modulos/grupo_persona/lista.php");
  }
  else if ($_GET['id']=="add_grupo_persona" && $_SESSION['nivel']==1) {
      include ("modulos/grupo_persona/add.php");
  }
  else if ($_GET['id']=="ver_integrantes" && $_SESSION['nivel']==1) {
      include ("modulos/grupo_persona/integrantes.php");
  }

// modulo de Grupo
  else if ($_GET['id']=="agregar_grupo" && $_SESSION['nivel']==1) {
      include ("modulos/grupo/agregar.php");
  }
  else if ($_GET['id']=="lista_grupo" && $_SESSION['nivel']==1) {
      include ("modulos/grupo/lista.php");
  }
  else if ($_GET['id']=="add_grupo" && $_SESSION['nivel']==1) {
      include ("modulos/grupo/add.php");
  }

// modulo de Admin
  else if ($_GET['id']=="agregar_admin" && $_SESSION['nivel']==1) {
      include ("modulos/admin/agregar.php");
  }
  else if ($_GET['id']=="lista_admin" && $_SESSION['nivel']==1) {
      include ("modulos/admin/lista.php");
  }
  else if ($_GET['id']=="add_admin" && $_SESSION['nivel']==1) {
      include ("modulos/admin/add.php");
  }
// abrir sesion
  else if ($_GET['id']=="entrar") {
      include ("modulos/funciones/entrar.php");
  }


// cerrar sesion
  else if ($_GET['id']=="salir") {
      session_destroy();
      echo "<meta http-equiv='refresh' content='0,?id=index'>";
  }

// si ingresan otro
  else {
    echo "<meta http-equiv='refresh' content='0,?id=index'>";
  }


include("estaticos/base/footer.php");

?>