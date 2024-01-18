<main>
    <div>
        <div>
            <div class="inicio">
                <!-- Codigo del formulario -->
                <form name="controlAcceso" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <legend>Iniciar Sesión</legend>
                    <div>
                        <button class="btn btn-secondary" aria-disabled="true" type="submit" name="iniciarSesion">Inicio Sesion</button>
                        <button class="btn btn-secondary" aria-disabled="true" type="submit" name="cancelar">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</main>