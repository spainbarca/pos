  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Administrar productos
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Administrar productos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">
            Agregar Producto
          </button>
        </div>
        <div class="box-body">
          <table class="table table-bordered table-striped dt-responsive tablas">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Imagen</th>
                <th>Código</th>
                <th>Descripción</th>
                <th>Categoría</th>
                <th>Stock</th>
                <th>Precio compra</th>
                <th>Precio venta</th>
                <th>Agregado</th>
                <th>Acciones</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>1</td>
                <td><img src="Vista/img/producto/default/example.jpg" class="img-thumbnail" width="50px"></td>
                <td>0001</td>
                <td>Lorem ipsum dolor sit amet</td>
                <td>Lotrem ipsum</td>
                <td>20</td>
                <td>$ 5.00</td>
                <td>$ 10.00</td>
                <td>2020-03-28 17:11</td>
                <td>
                  <div class="btn-group">
                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                  </div>
                </td>
              </tr>

               <tr>
                <td>1</td>
                <td><img src="Vista/img/producto/default/example.jpg" class="img-thumbnail" width="50px"></td>
                <td>0001</td>
                <td>Lorem ipsum dolor sit amet</td>
                <td>Lotrem ipsum</td>
                <td>20</td>
                <td>$ 5.00</td>
                <td>$ 10.00</td>
                <td>2020-03-28 17:11</td>
                <td>
                  <div class="btn-group">
                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                  </div>
                </td>
              </tr>

               <tr>
                <td>1</td>
                <td><img src="Vista/img/producto/default/example.jpg" class="img-thumbnail" width="50px"></td>
                <td>0001</td>
                <td>Lorem ipsum dolor sit amet</td>
                <td>Lotrem ipsum</td>
                <td>20</td>
                <td>$ 5.00</td>
                <td>$ 10.00</td>
                <td>2020-03-28 17:11</td>
                <td>
                  <div class="btn-group">
                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                  </div>
                </td>
              </tr>
              
            </tbody>
          </table>
        </div>

      </div>

    </section>
 
  </div>


<!-- MODAL AGREGAR PRODUCTO -->

<div id="modalAgregarProducto" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">

        <!-- CABEZA DEL MODAL -->
        <div class="modal-header" style="background: #3c8dbc; color:white">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar producto</h4>
        </div>

        <!-- CUERPO DEL MODAL -->
        <div class="modal-body">
          <div class="box-body">

            <!-- Entrada para el codigo -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-code"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoCodigo" placeholder="Ingresar código" required>
              </div>
            </div>

            <!-- Entrada para la descripción  -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span>

                <input type="text" class="form-control input-lg" name="nuevaDescripcion" placeholder="Ingresar descripción" required>
              </div>
            </div>

            <!-- Entrada para la categoria -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>

                <select class="form-control input-lg" name="nuevaCategoria">
                  <option value="">Seleccionar categoría</option>
                  <option value="Abarrotes">Abarrotes</option>
                  <option value="Aseo Personal">Aseo Personal</option>
                  <option value="Bebidas">Bebidas</option>
                </select>
              </div>
            </div>

            <!-- Entrada para el stock  -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-check"></i></span>

                <input type="number" class="form-control input-lg" name="nuevoStock" min="0" placeholder="Stock" required>
              </div>
            </div>

            <!-- Entrada para el precio compra  -->
            <div class="form-group row">
              <div class="col-xs-6">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span>

                  <input type="number" class="form-control input-lg" name="nuevoPrecioCompra" min="0.00" placeholder="Precio de compra" required>
                </div>
              </div>
            
            <!-- Entrada para el precio venta  -->
              <div class="col-xs-6">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span>

                  <input type="number" class="form-control input-lg" name="nuevoPrecioVenta" min="0.00" placeholder="Precio de venta" required>
                </div>

                <br>

                <!-- Checkbox para porcentaje  -->
                <div class="col-xs-6">
                  <div class="form-group">
                    <label>
                      <input type="checkbox" class="minimal porcentaje" checked>
                      Utilizar porcentaje
                    </label>
                  </div>
                </div>

                <!-- Entrada para el porcentaje  -->
                <div class="col-xs-6" style="padding: 0">
                  <div class="input-group">
                    <input type="number" class="form-control input-lg nuevoPorcentaje" min="0" value="40" required>
                    <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Subir foto -->
            <div class="form-group">
              <div class="panel">SUBIR IMAGEN</div>
              <input type="file" id="nuevaImagen" name="nuevaImagen">
              <p class="help-block">Peso máximo: 2 MB</p>
              <img src="Vista/img/producto/default/example.jpg" class="img-thumbnail" width="100px">
            </div>

          </div>
        </div>

        <!-- PIE DEL MODAL -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar producto</button>
        </div>
      </form>     
    </div>
  </div>
</div>