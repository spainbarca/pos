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
            <form role="form" method="post">
              <div class="box-body">
                <div class="box">

                  <!-- Entrada del vendedor-->
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span> 
                      <input type="text" class="form-control" id="nuevoVendedor" name="nuevoVendedor" value="Usuario Administrador" required>
                    </div>
                  </div>

                  <!-- Entrada del codigo de venta-->
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-key"></i></span> 
                      <input type="text" class="form-control" id="nuevaVenta" name="nuevaVenta" value="1000100" required>
                    </div>
                  </div>

                  <!-- Entrada del cliente-->
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-users"></i></span> 
                      
                      <select class="form-control" id="seleccionarCliente" name="seleccionarCliente" required>
                        <option value="">Seleccionar cliente</option>
                      </select>
                      
                      <span class="input-group-addon"><button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modalAgregarCliente" data-dismiss="modal">Agregar Cliente</button></span>
                    </div>
                  </div>

                  <!-- Entrada para agregar producto-->
                  <div class="form-group row nuevoProducto">

                    <!-- Descripción del producto -->
                    <div class="col-xs-6" style="padding-right:0px">
                      <div class="input-group">
                        <span class="input-group-addon"><button type="button" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></span>

                        <input type="text" class="form-control" id="agregarProducto" name="agregarProducto" placeholder="Descripción del producto" required>
                      </div>
                    </div>

                    <!-- Cantidad del producto -->
                    <div class="col-xs-3">
                      <input type="number" class="form-control" id="nuevaCantidadProducto" name="nuevaCantidadProducto" min="1" placeholder="0" required>
                    </div>

                    <!-- Precio del producto -->
                    <div class="col-xs-3" style="padding-left:0px">

                      <div class="input-group">
                        
                        <span class="input-group-addon"><i class="ion ion-social-usd"></i></span> 

                        <input type="number" class="form-control" id="nuevoPrecioProducto" name="nuevoPrecioProducto" placeholder="0000000" readonly required>

                      </div>
                    </div>
                  </div>

                  <!-- botón para agregar producto -->
                  <button type="button" class="btn btn-default hidden-lg">Agregar producto</button>
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
                                <input type="number" class="form-control" id="nuevoImpuestoVenta" name="nuevoImpuestoVenta" placeholder="0" required>

                                <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                              </div>
                            </td>

                            <td style="width:50%">
                              <div class="input-group">
                                
                                <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>
                              
                                <input type="number" min="1" class="form-control" id="nuevoTotalVenta" name="nuevoTotalVenta" placeholder="0000" readonly required>

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
                          <option value="efectivo">Efectivo</option>
                          <option value="tarjetaCredito">Tarjeta Crédito</option>
                          <option value="tarjetaDebito">Tarjeta Débito</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-xs-6" style="padding-left:0px">
                      <div class="input-group">
                      
                        <input type="text" class="form-control" id="nuevoCodigoTransaccion" name="nuevoCodigoTransaccion" placeholder="Código Transacción" required>
                        
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                      </div>
                    </div>
                  </div>
                  <br>
                </div>
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Guardar venta</button>
              </div>
            </form>
          </div>
        </div>

        <!-- La tabla de productos-->
        <div class="col-lg-7 hidden-md hidden-sm hidden-xs">
          <div class="box box-warning">
            <div class="box-header with-border">
            </div>

            <div class="box-body">
              <table class="table table-bordered table-striped dt-responsive tablas">
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

                <tbody>
                  <tr>
                    <td>1</td>
                    <td><img src="Vista/img/productos/default/example.jpg" class="img-thumbnail" width="50px"></td> 
                    <td>87555</td> 
                    <td>Hola que hace xD</td> 
                    <td>21</td> 
                    <td>
                      <div class="btn-group">
                        <button type="button" class="btn btn-primary">Agregar</button>
                      </div>
                    </td>     
                  </tr>
                </tbody>
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

