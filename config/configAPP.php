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

    $controller = [
        'inicioPublico' => 'controller/cInicioPublico.php',
        'login' => 'controller/cLogin.php',
        'inicioPrivado' => 'controller/cInicioPrivado.php',
        'detalle' => 'controller/cDetalle.php',
        'rss' => 'controller/cRSS.php',
        'registro' => 'controller/cRegistro.php',
        'miCuenta' => 'controller/cMiCuenta.php',
        'borrarCuenta' => 'controller/cBorrarCuenta.php',
        'wip' => 'controller/cWIP.php',
        'error' => 'controller/cError.php',
        'cambiarContraseña' => 'controller/cCambiarPassword.php',
        'consultarDepartamento' => 'controller/cMtoDepartamento.php',
        'añadirDepartamento' => 'controller/cAltaDepartamento.php',
        'editarDepartamento' => 'controller/cConsultarModificarDepartamento.php'
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
