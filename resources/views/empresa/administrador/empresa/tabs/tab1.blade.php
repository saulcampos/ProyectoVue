<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary active">
                <div class="panel-heading">Acceso a los datos de empresa</div>
                <div class="panel-body">
                    <div class="form-horizontal" >
                       

                        <div class="form-group">
                            <label class="col-md-4 control-label">RFC:</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" v-model="rfc" >

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Recordar
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button  class="btn btn-primary active" v-on:click="editEmpresa(rfc)">Iniciar</button>
                                <a class="btn btn-link" href="#">Olvidaste tu password?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

