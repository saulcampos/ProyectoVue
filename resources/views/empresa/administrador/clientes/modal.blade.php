                <div data-controls-modal="your_div_id" data-backdrop="static" data-keyboard="false"
                class="modal fade" tabindex="-1" role="dialog" id="ventana_modal">    
              <div  class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="widget-user">

                        <div class="widget-user-header bg-black" id="cart" >
                           <h3 class="modal-title widget-user-desc" v-if="!editando">Nuevo cliente</h4>
                           <h3 class="modal-title widget-user-desc" v-if="editando">Editando cliente</h4>
                        </div>

                        <div class="widget-user-image">
                          <img class="img-circle" src="{{ asset('adminlte/img/Logo.png') }}" alt="User Avatar">
                        </div>

                        <div class="modal-body">

                                <div  v-if="editando"  class="row">
                                    <div class="col-md-12">
                                        <p>Clave</p>
                                        <input disabled disabled class="form-control" type="text"  v-model="idcliente" >
                                    </div>
                                </div>
                                    <br>

                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="form-control" type="text"  v-model="nombres" placeholder="Nombre del cliente" >
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text"  v-model="direccion" placeholder="direecion del cliente" >
                                    </div>
                                </div>
                        
                                 <br>
                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input class="form-control" type="text"  v-model="telefono" placeholder="telefono del cliente" >
                                        </div>
                        
                                    </div>
  

                        </div><!--  modal body -->
                        
                        <div class="box-footer">

                            <button type="button" class="btn btn-danger active" data-dismiss="modal" v-on:click="Canselar">Cancelar</button>

                             <button type="submit" class="btn btn-primary active" v-on:click="agregarCliente()" v-if="!editando" >Guardar</button>

                             <button type="submit" class="btn btn-primary active" v-on:click="updateCliente(Aux_idcliente)" v-if="editando" >Actualizar</button>
                         
                        </div><!-- box-footer -->
                     
                    </div><!--  widget-user -->     
                  </div>
              </div>
        </div>