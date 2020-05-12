                <div data-controls-modal="your_div_id" data-backdrop="static" data-keyboard="false"
                class="modal fade" tabindex="-1" role="dialog" id="ventana_modal">    
              <div  class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="widget-user">

                        <div class="widget-user-header bg-black" id="cart" >
                           <h3 class="modal-title widget-user-desc" v-if="!editando">Nuevo producto</h4>
                           <h3 class="modal-title widget-user-desc" v-if="editando">Editando producto</h4>
                        </div>

                        <div class="widget-user-image">
                          <img class="img-circle" src="{{ asset('adminlte/img/Logo.png') }}" alt="User Avatar">
                        </div>


                    <div class="modal-body">
                        <br>
                       <div v-if="!editando" class="row">
                        <div class="col-md-12">
                            <p><input type="checkbox" class="form-check-input"
                                v-model="check" >
                                <strong>¿El producto no tiene una codigo de barras?</strong>
                            </p>
                        </div>
                    </div>
                    <br>
                    <div   class="row">
                        <div v-if="!check && !editando"  class="col-md-6">
                            <p>Clave</p>
                            <input  class="form-control" type="text" placeholder="la clave del producto"  v-model="idproducto" >
                        </div>

                        <div v-if="editando" class="col-md-6">
                            <p>Clave</p>
                            <input disabled  class="form-control" type="text" placeholder="la clave del producto"  v-model="idproducto" >
                        </div>

                        <div class="col-md-6">
                            <p>nombre</p>
                            <input class="form-control" type="text" placeholder="Escriba la el nombre" v-model="nombre" >
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <p style="color:blue;">Tipo unidad</p>
                            <select  class="form-control" v-model="tipo">
                                <option value="kilos">Kilogramos</option>
                                <option value="gramos">Gramos</option>
                                <option value="litros">Litros</option>
                                <option value="mililitros">Mililitros</option>
                                <option value="unidades">No aplica</option>

                           </select>

                        </div>
                        <div class="col-md-6">
                            <p style="color:blue;">Cantidad </p>
                            <input class="form-control" type="text"  v-model="cantidad_unidad_peso" placeholder="22: kilos"  >
                        </div>
                      </div><br>  

                   

                    <div class="row">
                     	<div class="col-md-6">
                            <p>stock min</p>
                    		<input class="form-control" type="text"  v-model="stockmin" placeholder="stok minimo" >
                        </div>
                        <div class="col-md-6">
                            <p>stock max</p>
                            <input class="form-control" type="text"  v-model="stockmax" placeholder="stok maximo" >
                        </div>
                    </div>

                        <br>
                    <div  class="row">
                        <div class="col-md-6">
                            <p>precio compra</p>
                            <input class="form-control" type="text"  v-model="precio_compra" placeholder="Porecio de compra" >
                        </div>
                        <div class="col-md-6">
                            <p>precio de venta</p>
                            <input class="form-control" type="text"  v-model="precio_venta" placeholder="Porecio de venta" >
                        </div>
                    </div>

                    <br>
                    
                     

                     <div class="row">
                        <div class="col-md-6">
                            <p>categoria</p>
                            <select  class="form-control" v-model="idcategoria">
                                <option disabled value="">Elige una categoria </option>
                                <option v-for="categoria in categorias" v-bind:value="categoria.idcategoria" >@{{categoria.nombre}} </option>
                           </select>

                        </div>
                        <div class="col-md-6">
                            <p>descripción</p>
                            <input class="form-control" type="text"  v-model="descripcion" placeholder="Escribe una descripcion" >
                        </div>
                        
                     </div>
                     <br>
                     <div class="row">
                         <div class="col-md-6">
                            <p>selecciona una foto</p>
                            <input disabled class="form-control" type="text"  v-model="foto"  >
                        </div>
                     </div>

                        </div><!--  modal body -->
                        
                        <div class="box-footer">

                            <button type="button" class="btn btn-danger active" data-dismiss="modal" v-on:click="Canselar()">Cancelar</button>

                             <button type="submit" class="btn btn-primary active" v-on:click="agregarProducto()" v-if="!editando" >Guardar</button>

                            <button type="submit" class="btn btn-primary active" v-on:click="updateProducto(AuxIdproducto)" v-if="editando" >Actualizar</button>
                         
                        </div><!-- box-footer -->
                     
                    </div><!--  widget-user -->     
                  </div>
              </div>
        </div>