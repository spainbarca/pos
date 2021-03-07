<?php

require_once "../Controlador/productos.controlador.php";
require_once "../Modelo/productos.modelo.php";

class AjaxProductos{

    /* Generar codigo a partir de idCategoria */
    public $idCategoria;

    public function ajaxCrearCodigoProducto(){

        $item = "id_categoria";
        $valor = $this->idCategoria;
        $orden = "id";
        
        $respuesta = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);

        echo json_encode($respuesta);
    }

    /* Editar producto */
    public $idProducto;
    public $traerProductos;
    public $nombreProducto;

    public function ajaxEditarProducto(){

        if($this->traerProductos == "ok"){
            
            $item = null;
            $valor = null;
            $orden = "id";

            $respuesta = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);
            echo json_encode($respuesta);

        }else if($this->nombreProducto != ""){

            $item = "descripcion";
            $valor = $this->nombreProducto;
            $orden = "id";
    
            $respuesta = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);
            echo json_encode($respuesta);
        
        }else{
            
            $item = "id";
            $valor = $this->idProducto;
            $orden = "id";
    
            $respuesta = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);
            echo json_encode($respuesta);
        }
    }
}

/* Generar código a partir de idCategoria */
if (isset($_POST["idCategoria"])) {
    
    $codigoProducto = new AjaxProductos();
    $codigoProducto -> idCategoria = $_POST["idCategoria"];
    $codigoProducto -> ajaxCrearCodigoProducto();
}

/* Editar producto */
if (isset($_POST["idProducto"])) {
    
    $editarProducto = new AjaxProductos();
    $editarProducto -> idProducto = $_POST["idProducto"];
    $editarProducto -> ajaxEditarProducto();
}

/* Traer producto */
if (isset($_POST["traerProductos"])) {
    
    $traerProductos = new AjaxProductos();
    $traerProductos -> traerProductos = $_POST["traerProductos"];
    $traerProductos -> ajaxEditarProducto();
}

/* n producto */
if (isset($_POST["nombreProducto"])) {
    
    $nombreProducto = new AjaxProductos();
    $nombreProducto -> nombreProducto = $_POST["nombreProducto"];
    $nombreProducto -> ajaxEditarProducto();
}