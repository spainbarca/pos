<?php

require_once "Controlador/plantilla.controlador.php";
require_once "Controlador/categorias.controlador.php";
require_once "Controlador/clientes.controlador.php";
require_once "Controlador/productos.controlador.php";
require_once "Controlador/usuarios.controlador.php";
require_once "Controlador/ventas.controlador.php";

require_once "Modelo/categorias.modelo.php";
require_once "Modelo/clientes.modelo.php";
require_once "Modelo/productos.modelo.php";
require_once "Modelo/usuarios.modelo.php";
require_once "Modelo/ventas.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();