<?php
    /**
     * @author Carlos García Cachón
     * @version 1.0
     * @since 27/12/2023
     * @copyright Todos los derechos reservados a Carlos García
     * 
     * @Annotation Proyecto LoginLogoutMulticapaPOO - Parte de 'indexLoginLogoutMulticapaPOO' 
     * 
     */

    // Enlazado con los ficheros de configuración de la aplicación y la base de datos
    require_once 'config/configAPP.php'; 
    require_once 'config/configDB.php'; 

    // Creación de una nueva sesión o Recuperación de la sesión
    session_start(); 

    // Si no hay una pagina en curso dentro de la sesión
    if(!isset($_SESSION['paginaEnCurso'])){ 
        // Asigno a la variable de paginaEnCurso la pagina de 'inicioPublico'
        $_SESSION['paginaEnCurso'] = 'inicioPublico'; 
    }

    require_once $controller[$_SESSION['paginaEnCurso']]; // Cargado de la página