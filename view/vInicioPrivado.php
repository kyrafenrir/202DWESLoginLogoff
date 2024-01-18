<main>
    <div class="container mt-3">
        <div class="row d-flex justify-content-start">
            <div class="col">
                <?php
                /**
                 * @author Carlos García Cachón
                 * @version 1.0
                 * @since 28/11/2023
                 * @copyright Todos los derechos reservados a Carlos García
                 * 
                 * @Annotation Proyecto LoginLogoffTema5 - Parte de 'Programa' 
                 * 
                 *
                if ($_SESSION['NumeroConexiones'] == 1) {
                    echo("<div>Bienvenid@ " . $_SESSION['DescripcionUsuario'] . " esta es la " . $_SESSION['NumeroConexiones'] . " vez que te conectas.</div>");
                } else {
                    echo("<div>Bienvenid@ " . $_SESSION['DescripcionUsuario'] . " esta es la " . $_SESSION['NumeroConexiones'] . " vez que te conectas. "
                    . "Usted se conectó por última vez el " . $_SESSION['FechaHoraUltimaConexionAnterior'] . "</div>");
                } */
                ?> 
            </div>
            <div class="col">
                <form name="Programa" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <button class="btn btn-secondary" aria-disabled="true" type="submit" name="cerrarSesion">Cerrar Sesión</button><br>
                    <button class="btn btn-secondary" aria-disabled="true" type="submit" name="detalle">Detalle</button>
                </form>        
            </div>
        </div>
    </div>
</main>
