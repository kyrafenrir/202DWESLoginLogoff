<?php
/**
 * @author Carlos García Cachón
 * @version 1.0
 * @since 03/01/2024
 * @copyright Todos los derechos reservados a Carlos García
 * 
 * @Annotation Proyecto LoginLogoutMulticapaPOO - Clase DBPDO
 * 
 */
class DBPDO implements DB {
    /**
     * Ejecuta las sentencias SQL recibidas con los parametros recibidos en dicha sentencia.
     * @param string $sentenciaSQL Sentencia SQL a ejecutar.
     * @param array | null $parametros 'Array' de parámetros para integrar en la sentencia o 'null' en caso de no tenerlos.
     * @return PDOStatement | null Devuelve el resultado de la consulta o 'null' en caso de fallar
     */
    public static function ejecutaConsulta($sentenciaSQL, $parametros = null) {
        try {
            $miDB = new PDO(dsn, usuario, password); // Instanciado del objeto PDO y establecemos la conexión
            
            $resultadoConsulta = $miDB->prepare($sentenciaSQL); // Preparación de la consulta
            $resultadoConsulta -> execute($parametros); // Ejecución de la consulta con el 'array' que contienen parametros

            return $resultadoConsulta; // Devolución del resultado de la consulta
        }catch(PDOException $excepcion){ // Código que se ejecuta si hay algún error
            $_SESSION['paginaEnCurso'] = 'error'; // Asigno a la variable superglobal $SESSION la página en curso la página de error
            
            /**
             * Creo una variable de $SESSION llamada 'error' y almaceno un objeto de la clase ErrorApp
             * En la variable '$_SESSION['paginaAnterior']' almacenamos la página anterior para poder volver una vez visualicemos el error en 'vError.php'
             */
            $_SESSION['error'] = new ErrorApp($excepcion->getCode(), $excepcion->getMessage(), $excepcion->getFile(), $excepcion->getLine(), $_SESSION['paginaAnterior']);
            header('Location: index.php'); // Redirecciono al index de la APP
            exit;
        } finally{
            unset($miDB); // Finalizado de la coneción con la base de datos
        }
    }
}
