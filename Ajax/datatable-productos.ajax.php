<?php

require_once "../Controlador/productos.controlador.php";
require_once "../Modelo/productos.modelo.php";

require_once "../Controlador/categorias.controlador.php";
require_once "../Modelo/categorias.modelo.php";

class TablaProductos{

	/* MOSTRAR TABLA PRODUCTOS*/
	public function mostrarTablaProductos(){

    $item = null;
    $valor = null;
    $orden = "id";

    $productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);

    $datosJSON = '{
      "data": [';

        for($i=0; $i < count($productos); $i++){
          
          /* TRAER LA IMAGEN DEL PRODUCTO*/
          $imagen = "<img src='".$productos[$i]["imagen"]."' width='50px'>";

          /* TRAER LA CATEGORIA DEL PRODUCTO*/
          $item = "id";
          $valor = $productos[$i]["id_categoria"];

          $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

          /* ASIGNAR STOCK*/
          if($productos[$i]["stock"] <= 5){
              
            $stock = "<button class='btn btn-danger'>".$productos[$i]["stock"]."</button>";

          }else if($productos[$i]["stock"] > 6 && $productos[$i]["stock"]<= 10){

            $stock = "<button class='btn btn-warning'>".$productos[$i]["stock"]."</button>";

          }else{

            $stock = "<button class='btn btn-success'>".$productos[$i]["stock"]."</button>";
          }
          
          /* TRAER LAS ACCIONES*/

          if(isset($_GET["perfilOculto"]) && $_GET["perfilOculto"] == "2"){

            $botones =  "<div class='btn-group'><button class='btn btn-warning btnEditarProducto' idProducto='".$productos[$i]["id"]."' data-toggle='modal' data-target='#modalEditarProducto'><i class='fa fa-pencil'></i></button></div>"; 
  
          }else{
  
             $botones =  "<div class='btn-group'><button class='btn btn-warning btnEditarProducto' idProducto='".$productos[$i]["id"]."' data-toggle='modal' data-target='#modalEditarProducto'><i class='fa fa-pencil'></i></button><button class='btn btn-danger btnEliminarProducto' idProducto='".$productos[$i]["id"]."' codigo='".$productos[$i]["codigo"]."' imagen='".$productos[$i]["imagen"]."'><i class='fa fa-times'></i></button></div>"; 
  
          }

          $datosJSON .='[
            "'.($i+1).'",
            "'.$imagen.'",
            "'.$productos[$i]["codigo"].'",
            "'.$productos[$i]["descripcion"].'",
            "'.$categorias["categoria"].'",
            "'.$stock.'",
            "'.$productos[$i]["precio_compra"].'",
            "'.$productos[$i]["precio_venta"].'",
            "'.$productos[$i]["fecha"].'",
            "'.$botones.'"
          ],';
        }

        $datosJSON = substr($datosJSON, 0, -1);

        $datosJSON .= ']
    }';

    echo $datosJSON;

    return;
	}
}

/* ACTIVAR TABLA PRODUCTOS*/
$activarProductos = new TablaProductos();
$activarProductos -> mostrarTablaProductos();