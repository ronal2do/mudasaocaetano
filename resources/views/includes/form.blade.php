  <div class="grupao">
            <div data-ng-app="mudaScs" class="col-md-12">
            <br>
                    <form class="form-horizontal" role="form" action="/sugestao" method="POST" name="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                        <div class="form-group">
                            <label for="nome" class="col-sm-2 control-label hidden-sm-down">Nome:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" 
                                    name="nome" 
                                    data-ng-model="nome" 
                                    placeholder="Nome"
                                    required>
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="" class="col-sm-2 control-label hidden-sm-down">Endereço:</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" 
                                    name="endereco" 
                                    data-ng-model="endereco" 
                                    placeholder="Endereço"
                                    required>
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="" class="col-sm-2 control-label hidden-sm-down">E-mail:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" 
                                    name="email" 
                                    data-ng-model="email" 
                                    placeholder="E-mail"
                                    required>
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="" class="col-sm-2 control-label hidden-sm-down">Telefone:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" 
                                    name="telefone" 
                                    data-ng-model="telefone" 
                                    mask="(99) 9999-9999"
                                    placeholder="Telefone com DDD"
                                    >
                            </div>
                        </div>
                            <div class="form-group">
                            <label for="" class="col-sm-2 control-label hidden-sm-down">Celular:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" 
                                            name="celular" 
                                            data-ng-model="celular" 
                                            mask="(99) 9?9999-9999"
                                            placeholder="Celular com DDD"
                                            required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10"> 
                                    <label class="control-label" for="celular">WhatsApp: </label>
                                    <label class="radio-inline"> <input type="radio" 
                                                name="whatsapp" 
                                                data-ng-model="whatsapp" 
                                                value="sim" data-ng-checked="true" > 
                                <span style="color:#000;">Sim</span>
                                    </label>
                                    <label class="radio-inline">  <input type="radio" 
                                                name="whatsapp" 
                                                data-ng-model="whatsapp" 
                                                value="nao">
                                  <span style="color:#000;">Não</span>
                                    </label>
                                </div>
                             </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <textarea class="form-control" 
                                            rows="5" 
                                            name="sugestao"
                                            data-ng-model="sugestao"
                                            ></textarea>
                                </div>
                            </div>
                            <div class="form-group"> 
                                <div class="col-sm-12">
                                  <button type="submit" 
                                          class="btn btn-block"
                                          data-ng-disabled="form.nome.$invalid || 
                                                            form.email.$invalid ||
                                                            form.endereco.$invalid ||
                                                            form.celular.$invalid ||
                                                            form.whatsapp.$checked" 
                                    >Enviar</button>
                                </div>
                            </div>
                    </form>


            </div>
        </div>