<?php
/**
 * @author Erika Martínez Pérez
 * @version 1.0
 * @since 16/01/2024
 * 
 */
interface DB {
    /**
     * Ejecuta las sentencias SQL recibidas con los parametros recibidos en dicha sentencia.
     * @param string $sentenciaSQL Sentencia SQL a ejecutar.
     * @param array | null $parametros 'Array' de parámetros para integrar en la sentencia o 'null' en caso de no tenerlos.
     */
    public static function ejecutaConsulta($sentenciaSQL, $parametros = null);
}
