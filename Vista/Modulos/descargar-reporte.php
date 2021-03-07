<?php

require_once "../../Controlador/ventas.controlador.php";
require_once "../../Modelo/ventas.modelo.php";
require_once "../../Controlador/clientes.controlador.php";
require_once "../../Modelo/clientes.modelo.php";
require_once "../../Controlador/usuarios.controlador.php";
require_once "../../Modelo/usuarios.modelo.php";

$reporte = new ControladorVentas();
$reporte -> ctrDescargarReporte();