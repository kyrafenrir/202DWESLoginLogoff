<style>
    .inicio{
        padding-left: 36%;
        padding-top: 5%;
        font-size: 1.6rem;
        font-weight: bold;
        font-family: consolas, monospace;
    }

    .inicio label:nth-of-type(1){
        margin-right: 43px;
    }

    legend{
        margin-left: 180px;
        margin-bottom: 10px;
    }

    button{
        width: 300px;
        height: 30px;
        margin-left: 120px;
        margin-top: 20px;
        font-weight: bold;
    }

    footer a{
        color: #999;
    }
</style>
</head>
<body>
    <main>
        <div>
            <div>
                <div class="inicio">
                    <!-- Codigo del formulario -->
                    <form name="controlAcceso" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <legend>Iniciar Sesión</legend>
                        <!-- CodDepartamento Obligatorio -->
                        <label for="user">Introduce usuario:</label>
                        <!-- El value contiene una operador ternario en el que por medio de un metodo 'isset()'
                        comprobamos que exista la variable y no sea 'null'. En el caso verdadero devolveremos el contenido del campo
                        que contiene '$_REQUEST' , en caso falso sobrescribirá el campo a '' .-->
                        <input type="text" name="user" value="<?php echo (isset($_REQUEST['user']) ? $_REQUEST['user'] : ''); ?>" size="30">
                        <?php
                        if (!empty($aErrores['user'])) {
                        echo $aErrores['user'];
                        }
                        ?> <!-- Aquí comprobamos que el campo del array '$aErrores' no está vacío, si es así, mostramos el error. -->
                        <!-- CodDepartamento Obligatorio -->
                        <br><label for="password">Introduce contraseña:</label>
                        <!-- El value contiene una operador ternario en el que por medio de un metodo 'isset()'
                             comprobamos que exista la variable y no sea 'null'. En el caso verdadero devolveremos el contenido del campo
                             que contiene '$_REQUEST' , en caso falso sobrescribirá el campo a '' .-->
                        <input type="password" name="password" value="<?php echo (isset($_REQUEST['password']) ? $_REQUEST['password'] : ''); ?>" size="30">
                        <?php
                        if (!empty($aErrores['password'])) {
                        echo $aErrores['password'];
                        }
                        ?> <!-- Aquí comprobamos que el campo del array '$aErrores' no está vacío, si es así, mostramos el error. -->
                        <div>
                            <button  type="submit" name="Login">Iniciar Sesión</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>