<?php
    if($_SESSION["perfil"]=="2"){
      echo '<script> 
        window.location = "inicio";
      </script>';

      return;
    }
  ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Crear ventas
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Crear ventas</li>
      </ol>
    </section>
    
    <section class="content">
      <div class="row">
        
        <!-- El formulario-->
        <div class="col-lg-5 col-xs-12">
          <div class="box box-success">
            <div class="box-header with-border"></div>
            <form role="form" method="post" class="formularioVenta">
              <div class="box-body">
                <div class="box">

                  <!-- Entrada del vendedor-->
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span> 
                      
                      <input type="text" class="form-control" id="nuevoVendedor" value="<?php echo $_SESSION["nombre"]; ?>" readonly>

                      <input type="hidden" name="idVendedor" value="<?php echo $_SESSION["id"]; ?>"> 
                    </div>
                  </div>

                  <!-- Entrada del codigo de venta-->
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                      <?php
                        $item = null;
                        $valor = null;
    
                        $ventas = ControladorVentas::ctrMostrarVentas($item, $valor);

                        if(!$ventas){

                          echo '<input type="text" class="form-control" id="nuevaVenta" name="nuevaVenta" value="10001" readonly>';
                      
                        }else{
    
                          foreach ($ventas as $key => $value) {
                            
                          }
    
                          $codigo = $value["codigo"] + 1;

                          echo '<input type="text" class="form-control" id="nuevaVenta" name="nuevaVenta" value="'.$codigo.'" readonly>';
                        }  
                      ?>
                    </div>
                  </div>

                  <!-- Entrada del cliente-->
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-users"></i></span> 
                      
                      <select class="form-control" id="seleccionarCliente" name="seleccionarCliente" required>
                        <option value="">Seleccionar cliente</option>

                        <?php
                          $item = null;
                          $valor = null;

                          $categorias = ControladorClientes::ctrMostrarClientes($item, $valor);

                          foreach ($categorias as $key => $value) {

                            echo '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';
                          }
                        ?>
                      </select>
                      
                      <span class="input-group-addon"><button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modalAgregarCliente" data-dismiss="modal">Agregar Cliente</button></span>
                    </div>
                  </div>

                  <!-- Entrada para agregar producto-->
                  <div class="form-group row nuevoProducto">

                  </div>

                  <input type="hidden" id="listaProductos" name="listaProductos">

                  <!-- botón para agregar producto -->
                  <button type="button" class="btn btn-default hidden-lg btnAgregarProducto">Agregar producto</button>
                  <hr>

                  <div class="row">

                    <!-- Entrada impuestos y total -->
                    <div class="col-xs-8 pull-right">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Impuesto</th>
                            <th>Total</th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <td style="width:50%">
                              <div class="input-group">
                                <input type="number" class="form-control input-lg" id="nuevoImpuestoVenta" name="nuevoImpuestoVenta" min="0" placeholder="0" required>

                                <input type="hidden" name="nuevoPrecioImpuesto" id="nuevoPrecioImpuesto" required>
                                <input type="hidden" name="nuevoPrecioNeto" id="nuevoPrecioNeto" required>

                                <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                              </div>
                            </td>

                            <td style="width:50%">
                              <div class="input-group">
                                
                                <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>
                              
                                <input type="number" class="form-control input-lg" id="nuevoTotalVenta" name="nuevoTotalVenta" total="" placeholder="0000" readonly required>

                                <input type="hidden" name="totalVenta" id="totalVenta">

                              </div>
                            </td>

                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <hr>

                  <!-- Entrada método de pago -->
                  <div class="form-group row">
                    <div class="col-xs-6" style="padding-right:0px">
                      <div class="input-group">
                        <select class="form-control" id="nuevoMetodoPago" name="nuevoMetodoPago" required>
                          <option value="">Seleccione método de pago</option>
                          <option value="Efectivo">Efectivo</option>
                          <option value="TC">Tarjeta Crédito</option>
                          <option value="TD">Tarjeta Débito</option>
                        </select>
                      </div>
                    </div>

                    <div class="cajasMetodoPago"></div>
                    <input type="hidden" name="listaMetodoPago" id="listaMetodoPago" required>
                    
                    </div>
                  <br>
                </div>
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Guardar venta</button>
              </div>
            </form>

            <?php

              $guardarVenta = new ControladorVentas();
              $guardarVenta -> ctrCrearVenta();
            ?>
          </div>
        </div>

        <!-- La tabla de productos-->
        <div class="col-lg-7 hidden-md hidden-sm hidden-xs">
          <div class="box box-warning">
            <div class="box-header with-border">
            </div>

            <div class="box-body">
              <table class="table table-bordered table-striped dt-responsive tablaVentas">
                <thead>
                  <tr>
                    <th style="width:10px">#</th>
                    <th>Imagen</th>
                    <th>Código</th>
                    <th>Descripción</th>
                    <th>Stock</th>
                    <th>Acciones</th>
                  </tr>
                </thead>

              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<!-- MODAL AGREGAR CLIENTE -->

<div id="modalAgregarCliente" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" method="post">

        <!-- CABEZA DEL MODAL -->
        <div class="modal-header" style="background: #3c8dbc; color:white">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar cliente</h4>
        </div>

        <!-- CUERPO DEL MODAL -->
        <div class="modal-body">
          <div class="box-body">

            <!-- Entrada para el nombre -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Agregar nombre" required>
              </div>
            </div>

            <!-- Entrada para el DNI -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                <input type="number" min="0" class="form-control input-lg" name="nuevoDocumentoId" placeholder="Agregar DNI" required>
              </div>
            </div>

            <!-- Entrada para el E-mail -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>

                <input type="email" class="form-control input-lg" name="nuevoEmail" placeholder="Agregar E-mail" required>
              </div>
            </div>

            <!-- Entrada para el teléfono -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Agregar Celular" data-inputmask="'mask':'(999) 999-999-999'" data-mask required>
              </div>
            </div>

            <!-- Entrada para la dirección -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>

                <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Agregar Dirección" required>
              </div>
            </div>

            <!-- Entrada para fecha de nacimiento -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>

                <input type="text" class="form-control input-lg" name="nuevaFechaNacimiento" placeholder="Agregar Fecha Nacimiento" data-inputmask="'alias':'yyyy/mm/dd'" data-mask required>
              </div>
            </div>
          </div>
        </div>

        <!-- PIE DEL MODAL -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar cliente</button>
        </div>
      </form>     

      <?php
        $crearCliente = new ControladorClientes();
        $crearCliente -> ctrCrearCliente();
      ?>

    </div>
  </div>
</div>

