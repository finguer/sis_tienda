<?php
/**
 *@package pXP
 *@file gen-MODDevweb.php
 *@author  (admin)
 *@date 04-07-2016 15:19:06
 *@description Clase que envia los parametros requeridos a la Base de datos para la ejecucion de las funciones, y que recibe la respuesta del resultado de la ejecucion de las mismas
 */

class MODProducto extends MODbase
{

    function __construct(CTParametro $pParam)
    {
        parent::__construct($pParam);
    }

    function listarProducto(){
        //Definicion de variables para ejecucion del procedimientp
        $this->procedimiento='tie.ft_producto_sel';
        $this->transaccion='TIE_PRODUCTO_SEL';
        $this->tipo_procedimiento='SEL';//tipo de transaccion


        //Definicion de la lista del resultado del query
        $this->captura('id_producto','int4');
        $this->captura('estado_reg','varchar');
        $this->captura('nombre','varchar');
        $this->captura('precio','numeric');
        $this->captura('id_usuario_reg','int4');
        $this->captura('fecha_reg','timestamp');
        $this->captura('usuario_ai','varchar');
        $this->captura('id_usuario_ai','int4');
        $this->captura('id_usuario_mod','int4');
        $this->captura('fecha_mod','timestamp');
        $this->captura('usr_reg','varchar');
        $this->captura('usr_mod','varchar');


        //Ejecuta la instruccion
        $this->armarConsulta();
        $this->ejecutarConsulta();

        //Devuelve la respuesta
        return $this->respuesta;
    }

    function insertarProducto() {
        $this->procedimiento='tie.ft_producto_ime';
        $this->transaccion='TIE_PRODUCTO_INS';
        $this->tipo_procedimiento='IME';

        $this->setParametro('id_producto','id_producto','int4');
        $this->setParametro('nombre','nombre','varchar');
        $this->setParametro('precio','precio','numeric');

        //Ejecuta la instruccion
        $this->armarConsulta();
        $this->ejecutarConsulta();

        //Devuelve la respuesta
        return $this->respuesta;

    }
    function modificarProducto() {
        $this->procedimiento='tie.ft_producto_ime';
        $this->transaccion='TIE_PRODUCTO_MOD';
        $this->tipo_procedimiento='IME';

        $this->setParametro('id_producto','id_producto','int4');
        $this->setParametro('nombre','nombre','varchar');
        $this->setParametro('precio','precio','numeric');

        //Ejecuta la instruccion
        $this->armarConsulta();
        $this->ejecutarConsulta();

        //Devuelve la respuesta
        return $this->respuesta;

    }
    function eliminarProducto() {
        $this->procedimiento='tie.ft_producto_ime';
        $this->transaccion='TIE_PRODUCTO_ELI';
        $this->tipo_procedimiento='IME';

        $this->setParametro('id_producto','id_producto','int4');

        //Ejecuta la instruccion
        $this->armarConsulta();
        $this->ejecutarConsulta();

        //Devuelve la respuesta
        return $this->respuesta;

    }




}
?>