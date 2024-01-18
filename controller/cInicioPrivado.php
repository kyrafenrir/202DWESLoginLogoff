<?php
/**
 * @author Carlos García Cachón
 * @version 1.0
 * @since 02/01/2024
 * @copyright Todos los derechos reservados a Carlos García
 * 
 * @Annotation Proyecto LoginLogoutMulticapaPOO - Parte de 'cInicioPrivado' 
 * 
 */

//Si el usuario pulsa el botón 'Cerrar Sesion', mando al usuario al index de DWES
if(isset($_REQUEST['cerrarSesion'])){
    session_unset(); // Elimino la sesión
    header('Location: index.php'); // Redirecciono al index de la APP
    exit;
}

//Si el usuario pulsa el botón 'Detalle', mando al usuario al index de DWES
if(isset($_REQUEST['detalle'])){
    $_SESSION['paginaEnCurso'] = 'wip'; // Asigno a la pagina en curso la pagina de WIP (Work in Progress)
    header('Location: index.php'); // Redirecciono al index de la APP
    exit;
}

//Si el usuario pulsa el botón 'Editar Perfil', mando al usuario al index de DWES
if(isset($_REQUEST['editarPerfil'])){
    $_SESSION['paginaEnCurso'] = 'wip'; // Asigno a la pagina en curso la pagina de WIP (Work in Progress)
    header('Location: index.php'); // Redirecciono al index de la APP
    exit;
}

// $descripcionUsuario = $_SESSION['user202DWESLoginLogoutMulticapaPOO']->get_descUsuario(); // Recupero y almaceno la descripción del usuario actual
// $numeroConexionesUsuario = $_SESSION['user202DWESLoginLogoutMulticapaPOO']->get_numAcceso(); // Recupero y almaceno el número de conexiones del usuario actual
// $fechaHoraUltimaConexionAnterior = $_SESSION['user202DWESLoginLogoutMulticapaPOO']->get_fechaHoraUltimaConexionAnterior(); // Recupero y almaceno la fecha y hora de conexión anterior del usuario actual

require_once $view['layout']; // Cargo la vista de 'inicioPrivado'