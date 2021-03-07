<?php

require_once "../Controlador/productos.controlador.php";
require_once "../Modelo/productos.modelo.php";

class TablaProductosVentas{

	/* MOSTRAR TABLA PRODUCTOS*/
	public function mostrarTablaProductosVentas(){

    $item = null;
    $valor = null;
    $orden = "id";

    $productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);

    $datosJSON = '{
      "data": [';

        for($i=0; $i < count($productos); $i++){
          
          /* TRAER LA IMAGEN DEL PRODUCTO*/
          $imagen = "<img src='".$productos[$i]["imagen"]."' width='50px'>";

          /* ASIGNAR STOCK*/
          if($productos[$i]["stock"] <= 5){
              
            $stock = "<button class='btn btn-danger'>".$productos[$i]["stock"]."</button>";

          }else if($productos[$i]["stock"] > 6 && $productos[$i]["stock"]<= 10){

            $stock = "<button class='btn btn-warning'>".$productos[$i]["stock"]."</button>";

          }else{

            $stock = "<button class='btn btn-success'>".$productos[$i]["stock"]."</button>";
          }
          
          /* TRAER LAS ACCIONES*/
          $botones = "<div class='btn-group'><button class='btn btn-primary agregarProducto recuperarBoton' idProducto='".$productos[$i]["id"]."'>Agregar</button></div>"; 

          $datosJSON .='[
            "'.($i+1).'",
            "'.$imagen.'",
            "'.$productos[$i]["codigo"].'",
            "'.$productos[$i]["descripcion"].'",
            "'.$stock.'",
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
$activarProductosVentas = new TablaProductosVentas();
$activarProductosVentas -> mostrarTablaProductosVentas();