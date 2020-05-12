        <div data-controls-modal="your_div_id" data-backdrop="static" data-keyboard="false"
                class="modal fade" tabindex="-1" role="dialog" id="ventana_modal">    
              <div  class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="widget-user">

                        <div class="widget-user-header bg-black" id="cart" >
                           <h3 class="modal-title widget-user-desc" v-if="!editando">Nuevo Empleado</h4>
                           <h3 class="modal-title widget-user-desc" v-if="editando">Editando Empleado</h4>
                        </div>

                        <div class="widget-user-image">
                          <img class="img-circle" src="{{ asset('adminlte/img/Logo.png') }}" alt="User Avatar">
                        </div>

                        <div class="modal-body">


                                <br>
                                <div v-if="editando" class="row">
                                  <div class="col-md-12">
                                     <input  disabled  class="form-control" type="text"   placeholder="Clave de empleado" v-model="idempleado">
                                    </div>                
                                </div><br>

                                <div class="row">
                                  <div class="col-md-12">
                                    <input class="form-control" type="text" name="" placeholder="Nombre completo del trabajador" v-model="nombres">
                                  </div>
                                </div>
                               <br>

                                <div class="row">
                                  <div class="col-md-12">
                                     <select  required class="form-control" v-model="idpuesto">
                                      <option disabled value="">Elige un puesto             </option>
                                      <option v-for="puesto in puestos" v-bind:value="puesto.idpuesto" >@{{puesto.nombre}} </option>
                                    </select>
                                   </div>
                                </div>

                                 <br>
  

                        </div><!--  modal body -->
                        
                        <div class="box-footer">

                              <button type="button" class="btn btn-danger active" v-on:click="Canselar()">Cancelar</button>

                              <button type="submit" class="btn btn-primary active" v-on:click="agregarEmpleado()" v-if="!editando">Guardar</button>

                              <button  class="btn btn-primary active" v-on:click="updateEmpleado(Aux_idempleado)" v-if="editando">Actualizar</button>
                         
                        </div><!-- box-footer -->
                     
                    </div><!--  widget-user -->     
                  </div>
              </div>
        </div>