        <div data-controls-modal="your_div_id" data-backdrop="static" data-keyboard="false"
                class="modal fade" tabindex="-1" role="dialog" id="ventana_modal">    
              <div  class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="widget-user">

                        <div class="widget-user-header bg-black" id="cart" >
                           <h3 class="modal-title widget-user-desc" v-if="!editando">Ingreso de costos</h4>
                           <h3 class="modal-title widget-user-desc" v-if="editando">Ver detalles de costo</h4>
                        </div>

                        <div class="widget-user-image">
                          <img class="img-circle" alt="User Avatar"
                            src="{{ asset('adminlte/img/Logo.png') }}">
                        </div><br>


                   
                   <div class="modal-body">
  
                      <div v-if="!editando">
                         @include('empresa.usuario.costos.vistas.insertar');
                      </div>


                      <div v-if="editando">
                        @include('empresa.usuario.costos.vistas.detalles');
                      </div>                  
 
                   </div>


                   <div class="box-footer">

                        <button v-if="!editando" type="button" class="btn btn-danger active" data-dismiss="modal" v-on:click="Canselar()">Salir</button>

                        <button v-if="editando" type="button" class="btn btn-primary active" data-dismiss="modal" v-on:click="Canselar()">Salir</button>

                        <button  class="btn btn-primary active" v-on:click="agregarCosto()" v-if="!editando" >Guardar</button>

                        <span class="btn btn-danger active glyphicon glyphicon-trash" v-if="editando" v-on:click="eliminarDCosto(AuxIdcosto)" ></span>



                   </div><!-- box-footer -->



                    </div><!--  widget-user -->     
                  </div>
              </div>
        </div>