<?php
    /**
     * @author Carlos García Cachón
     * @version 1.0
     * @since 27/12/2023
     * @copyright Todos los derechos reservados a Carlos García
     * 
     * @Annotation Proyecto LoginLogoutMulticapaPOO - Parte de configuración
     * 
     */
    require_once 'core/231018libreriaValidacion.php';

    require_once 'model/DB.php';
    require_once 'model/DBPDO.php';
    require_once 'model/ErrorApp.php';
    require_once 'model/Usuario.php';
    require_once 'model/UsuarioDB.php';
    require_once 'model/UsuarioPDO.php';

    $controller = [
        'inicioPublico' => 'controller/cInicioPublico.php',
        'login' => 'controller/cLogin.php',
        'inicioPrivado' => 'controller/cInicioPrivado.php',
        'tecnologias' => 'controller/cTecnologias.php',
        'rss' => 'controller/cRSS.php',
        'registro' => 'controller/cRegistro.php',
        'miCuenta' => 'controller/cMiCuenta.php',
        'borrarCuenta' => 'controller/cBorrarCuenta.php',
        'wip' => 'controller/cWIP.php',
        'error' => 'controller/cError.php'
    ];
    $view = [
        'layout' => 'view/layout.php',
        'inicioPublico' => 'view/vInicioPublico.php',
        'login' => 'view/vLogin.php',
        'inicioPrivado' => 'view/vInicioPrivado.php',
        'tecnologias' => 'view/vTecnologias.php',
        'rss' => 'view/vRSS.php',
        'registro' => 'view/vRegistro.php',
        'miCuenta' => 'view/vMiCuenta.php',
        'borrarCuenta' => 'view/vBorrarCuenta.php',
        'wip' => 'view/vWIP.php',
        'error' => 'view/vError.php'
    ];
?>
