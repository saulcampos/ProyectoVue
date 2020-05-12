                <div data-controls-modal="your_div_id" data-backdrop="static" data-keyboard="false"
                class="modal fade" tabindex="-1" role="dialog" id="ventana_modal">    
              <div  class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="widget-user">

                        <div class="widget-user-header bg-black" id="cart" >
                           <h3 class="modal-title widget-user-desc" v-if="!editando">Nuevo Categoria</h4>
                           <h3 class="modal-title widget-user-desc" v-if="editando">Editando Categoria</h4>
                        </div>

                        <div class="widget-user-image">
                          <img class="img-circle" src="{{ asset('adminlte/img/Logo.png') }}" alt="User Avatar">
                        </div>

                        <div class="modal-body">
  
                               <br>
                                <div v-if="editando"  class="row">
                                    <div class="col-md-12">
                                        <p>Clave</p>
                                        <input disabled class="form-control" type="text"  v-model="idcategoria" >
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col-md-12">
                                    <input class="form-control" type="text"  v-model="nombre" placeholder="Nombre" >
                                    </div>
                                </div>
                                 <br>
                                <div  class="row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="text"  v-model="descripcion" placeholder="Escribe una descripcion" >
                                    </div>
                                </div>
                                 <br>

                        </div><!--  modal body -->
                        
                        <div class="box-footer">

                            <button type="button" class="btn btn-danger active" data-dismiss="modal" v-on:click="Canselar()">Cancelar</button>
                            <button  class="btn btn-primary active" v-on:click="agregarCategoria()" v-if="!editando" >Guardar</button>

                            <button type="submit" class="btn btn-primary active" v-on:click="updateCategoria(AuxIdcategoria)" v-if="editando" >Actualizar</button>
                         
                        </div><!-- box-footer -->
                     
                    </div><!--  widget-user -->     
                  </div>
              </div>
        </div>