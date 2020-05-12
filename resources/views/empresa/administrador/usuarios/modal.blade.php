        <div data-controls-modal="your_div_id" data-backdrop="static" data-keyboard="false"
                class="modal fade" tabindex="-1" role="dialog" id="ventana_modal">    
              <div  class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="widget-user">

                        <div class="widget-user-header bg-black" id="cart" >
                           <h3 class="modal-title widget-user-desc" v-if="!editando">Nuevo usuario</h4>
                           <h3 class="modal-title widget-user-desc" v-if="editando">Editando usuario</h4>
                        </div>

                        <div class="widget-user-image">
                          <img class="img-circle" src="{{ asset('adminlte/img/Logo.png') }}" alt="User Avatar">
                        </div>

                        <div class="modal-body">
                          
                          <br>
                            <div class="row">
                              <div class="col-md-6">
                                  <input v-if="!editando" class="form-control" type="text"  name="" placeholder="Nick name" v-model="nickname">

                                  <input disabled v-if="editando" class="form-control" type="text"  name="" placeholder="Nick name" v-model="nickname">
                      
                              </div>

                              <div class="col-md-6">
                                <select  class="form-control" v-model="idrol">
                                  <option disabled value="">Elige un rol </option>
                                  <option v-for="rol in roles" v-bind:value="rol.idrol" >@{{rol.rol}} </option>
                                </select>
                              </div>

           
                             </div><br>

                            <div class="row">
                              <div class="col-md-6">
                                <select  class="form-control" v-model="idempleado">
                                  <option disabled value="">Elige un empleado</option>
                                  <option v-for="empleado in empleados" v-bind:value="empleado.idempleado" >@{{empleado.nombres}} </option>
                                </select>
                              </div>

                       

                              <div class="col-md-6">
                                <input class="form-control" type="text" name="" placeholder="Contraseña" v-model="password">
                              </div>

                            </div><br>


                            <div class="row">
                              <div class="col-md-12">
                                <input class="form-control" type="file" name="" placeholder="Imagen" v-model="foto">
                              </div>
                            </div>


                        </div>

                        <div class="box-footer">
                          <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-danger active" v-on:click="Canselar()">Cancelar</button>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary active" v-on:click="agregarUsuario()" v-if="!editando">Guardar</button>
                                <button  class="btn btn-primary active" v-on:click="updateUsuario(Aux_nickname)" v-if="editando">Actualizar</button>
                            </div>
                          </div>
                         </div><!-- box-footer -->
                     
                    </div><!--  widget-user -->     
                  </div>
              </div>
        </div>