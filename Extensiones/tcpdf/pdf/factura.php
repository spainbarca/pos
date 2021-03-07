<?php

require_once "../../../Controlador/ventas.controlador.php";
require_once "../../../Modelo/ventas.modelo.php";

require_once "../../../Controlador/clientes.controlador.php";
require_once "../../../Modelo/clientes.modelo.php";

require_once "../../../Controlador/usuarios.controlador.php";
require_once "../../../Modelo/usuarios.modelo.php";

require_once "../../../Controlador/productos.controlador.php";
require_once "../../../Modelo/productos.modelo.php";

class imprimirFactura{

public $codigo;

public function traerImpresionFactura(){

/* Traer información de la venta */
$itemVenta = "codigo";
$valorVenta = $this->codigo;

$respuestaVenta = ControladorVentas::ctrMostrarVentas($itemVenta, $valorVenta);

$fecha = substr($respuestaVenta["fecha"],0,-8);
$productos = json_decode($respuestaVenta["productos"], true);
$neto = number_format($respuestaVenta["neto"],2);
$impuesto = number_format($respuestaVenta["impuesto"],2);
$total = number_format($respuestaVenta["total"],2);

/* Traer información del cliente */
$itemCliente = "id";
$valorCliente = $respuestaVenta["id_cliente"];

$respuestaCliente = ControladorClientes::ctrMostrarClientes($itemCliente, $valorCliente);

/* Traer información del vendedor */
$itemVendedor = "id";
$valorVendedor = $respuestaVenta["id_vendedor"];

$respuestaVendedor = ControladorUsuarios::ctrMostrarUsuarios($itemVendedor, $valorVendedor);

/* Requerir clase TCPDF */
require_once('tcpdf_include.php');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->startPageGroup();

$pdf->AddPage();

//----------------------------------------------------------------------------------

$bloque1 = <<<EOF

	<table>
		<tr>
			<td style="width:150px"><img src="images/logoGamarra.png"></td>

			<td style="background-color:white; width:140px">
				<div style="font-size:8.5px; text-align:right; line-height:15px;">
					<br>
					NIT: 1245 564

					<br>
					Direccion: Av. Los Gaaamarristas
				</div>
			</td>

			<td style="background-color:white; width:140px">
				<div style="font-size:8.5px; text-align:right; line-height:15px;">
					<br>
					Teléfono: 564-454512

					<br>
					mitiendita@gmail.com
				</div>
			</td>

			<td style="background-color:white; width:110px; text-align:center; color:red"><br><br>BOLETA Nº<br>$valorVenta</td>
		</tr>
	</table>

EOF;

$pdf->writeHTML($bloque1, false, false, false, false, '');

//---------------------------------------------------------------------------------

$bloque2 = <<<EOF

	<table>
		<tr>
			<td style="width:540px"><img src="images/back.jpg"></td>
		</tr>
	</table>

	<table style="font-size:10px; padding:5px 10px;">
		<tr>
			<td style="border: 1px solid #666; background-color:white; width:390px">
				Cliente: $respuestaCliente[nombre]
			</td>

			<td style="border: 1px solid #666; background-color:white; width:150px; text-align:right">
				Fecha: $fecha
			</td>
		</tr>

		<tr>
			<td style="border: 1px solid #666; background-color:white; width:540px">Vendedor: $respuestaVendedor[nombre]</td>
		</tr>

		<tr>
			<td style="border-bottom: 1px solid #666; background-color:white; width:540px"></td>
		</tr>
	</table>

EOF;

$pdf->writeHTML($bloque2, false, false, false, false, '');

//---------------------------------------------------------------------------------

$bloque3 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">
		<tr>
			<td style="border: 1px solid #666; background-color:white; width:260px; text-align:center">Producto</td>
			<td style="border: 1px solid #666; background-color:white; width:80px; text-align:center">Cantidad</td>
			<td style="border: 1px solid #666; background-color:white; width:100px; text-align:center">Valor Unit.</td>
			<td style="border: 1px solid #666; background-color:white; width:100px; text-align:center">Valor Total</td>
		</tr>
	</table>

EOF;

$pdf->writeHTML($bloque3, false, false, false, false, '');

//---------------------------------------------------------------------------------

foreach ($productos as $key => $item) {

$itemProducto = "descripcion";
$valorProducto = $item["descripcion"];
$orden = null;
	
$respuestaProducto = ControladorProductos::ctrMostrarProductos($itemProducto, $valorProducto, $orden);
	
$valorUnitario = number_format($respuestaProducto["precio_venta"], 2);
	
$precioTotal = number_format($item["total"], 2);
	
$bloque4 = <<<EOF
	
		<table style="font-size:10px; padding:5px 10px;">
			<tr>
				
				<td style="border: 1px solid #666; color:#333; background-color:white; width:260px; text-align:center">
					$item[descripcion]
				</td>
	
				<td style="border: 1px solid #666; color:#333; background-color:white; width:80px; text-align:center">
					$item[cantidad]
				</td>
	
				<td style="border: 1px solid #666; color:#333; background-color:white; width:100px; text-align:center">$ 
					$valorUnitario
				</td>
	
				<td style="border: 1px solid #666; color:#333; background-color:white; width:100px; text-align:center">$ 
					$precioTotal
				</td>

			</tr>
		</table>
	
EOF;
	
$pdf->writeHTML($bloque4, false, false, false, false, '');
}

//---------------------------------------------------------------------------------

$bloque5 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">
		
		<tr>
			<td style="color:#333; background-color:white; width:340px; text-align:center"></td>

			<td style="border-bottom: 1px solid #666; background-color:white; width:100px; text-align:center"></td>

			<td style="border-bottom: 1px solid #666; color:#333; background-color:white; width:100px; text-align:center"></td>
		</tr>

		<tr>
			<td style="border-right: 1px solid #666; color:#333; background-color:white; width:340px; text-align:center"></td>

			<td style="border: 1px solid #666;  background-color:white; width:100px; text-align:center">
				Neto:
			</td>

			<td style="border: 1px solid #666; color:#333; background-color:white; width:100px; text-align:center">
				$ $neto
			</td>
		</tr>
		
		<tr>
			<td style="border-right: 1px solid #666; color:#333; background-color:white; width:340px; text-align:center"></td>

			<td style="border: 1px solid #666; background-color:white; width:100px; text-align:center">
				Impuesto:
			</td>
		
			<td style="border: 1px solid #666; color:#333; background-color:white; width:100px; text-align:center">
				$ $impuesto
			</td>
		</tr>

		<tr>
			<td style="border-right: 1px solid #666; color:#333; background-color:white; width:340px; text-align:center"></td>

			<td style="border: 1px solid #666; background-color:white; width:100px; text-align:center">
				Total:
			</td>
			
			<td style="border: 1px solid #666; color:#333; background-color:white; width:100px; text-align:center">
				$ $total
			</td>
		</tr>

	</table>

EOF;

$pdf->writeHTML($bloque5, false, false, false, false, '');

//---------------------------------------------------------------------------------

/* Salida del archivo */
$pdf->Output('factura.pdf');

}
}

$factura = new imprimirFactura();
$factura -> codigo = $_GET["codigo"];
$factura -> traerImpresionFactura();

?>