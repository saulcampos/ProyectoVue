

               <div data-controls-modal="your_div_id" data-backdrop="static" data-keyboard="false"
                class="modal fade" tabindex="-1" role="dialog" id="ventana_modal">    
              <div  class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="widget-user">

                        <div class="widget-user-header bg-black" id="cart" >
                           <h3 class="modal-title widget-user-desc"> Alimentar, dar vacunas o rejistrar bajas en un galpon</h4>
                           
                        </div>

                        <div class="widget-user-image">
                          <img class="img-circle" alt="User Avatar"
                            src="{{ asset('adminlte/img/Logo.png') }}">
                        </div><br>


                   
                   <div class="modal-body">
  
                    <div class="row">
                        <div class="col-xs-6">
                            <table id="tablita" class="table table-responsive table-striped table-bordered table-condensed table-hover">
                                <thead class="table">
                                   <tr class="Azulito">
                                      <th>nombre</th>
                                      <th>total</th>
                                   </tr>
                                </thead>
                        
                                <tbody>
                                   <tr>
                                      <td>@{{nombre}}</td>
                                      <td>@{{total}}</td>
                                   </tr>
                                </tbody>
                            </table>
                        </div>
                      </div>







                  

                        <br>
                            <ul class="nav nav-tabs">
                              <li class="active"><a data-toggle="tab" href="#home">Alimentacion</a></li>
                              <li><a data-toggle="tab" href="#menu2">Vacunas</a></li>
                              <li><a data-toggle="tab" href="#menu3">Mortalidades</a></li>
                              <li><a data-toggle="tab" href="#menu4">Ventas</a></li> 
                              <li><a data-toggle="tab" href="#menu5">Historia V</a></li>
                              <li><a data-toggle="tab" href="#menu6">Historia A</a></li> 
                            </ul>

                          <div class="tab-content">
                           
                                <div id="home" class="tab-pane fade in active">
                                    <h3 class="Tazul">Alimentaciones</h3>
                                      <div class="form-row">
                                        @include('empresa.usuario.aplicaciones.tabs.tab1')
                                      </div>
                                </div>
                            

              
                              <div id="menu2" class="tab-pane fade">
                                  <h3 align="center">Vacunaciones</h3>
                                      <div class="form-row">
                                      @include('empresa.usuario.aplicaciones.tabs.tab2')                
                                  </div>
                              </div>
                      


                              <div id="menu3" class="tab-pane fade">
                                  <h3 align="center">Mortalidad</h3>
                                      <div class="form-row">
                                      @include('empresa.usuario.aplicaciones.tabs.tab3')                
                                  </div>
                              </div>
                       

                            
                              <div id="menu4" class="tab-pane fade">
                                     <h3 align="center">Ventas </h3>
                                      <div class="form-row">
                                           @include('empresa.usuario.aplicaciones.tabs.tab4')
                                       </div>
                              </div>

                              <div id="menu5" class="tab-pane fade">
                                     <h3 align="center">Historial de vacunas </h3>
                                      <div class="form-row">
                                           @include('empresa.usuario.aplicaciones.tabs.tab5')
                                       </div>
                              </div>

                              <div id="menu6" class="tab-pane fade">
                                     <h3 align="center">Historial de alimentacion </h3>
                                      <div class="form-row">
                                           @include('empresa.usuario.aplicaciones.tabs.tab6')
                                       </div>
                              </div>
                           

                           </div>              
 
                   </div>


                   <div class="box-footer">

                      

                   </div><!-- box-footer -->
                    </div><!--  widget-user -->     
                  </div>
              </div>
        </div>