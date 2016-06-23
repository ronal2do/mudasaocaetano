@extends('layouts.site')
@section('banner')
<div class="container" >
    <div class="fundo">
        <img src="./assets/images/Foto.jpg" alt="tarcisio" class="waves-image" width="100%">
    </div>
</div>

@endsection
@section('content')

 <div class="container">

    <div class="panel-group col-md-8 col-md-offset-2" id="accordion">

        <div class="panel panel-default">
            <div class="panel-heading Yellow">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"> 
                    <h4 class="panel-title">
                     <div class="enjoy-css"></div>
                    Social
                    </h4>
                    <span class="Line"></span>
                </a>
            </div>
            <div id="collapse1" class="panel-collapse collapse"> <!--collapse in -->
                <div class="panel-body Body">
                    <p class="Strong">Desenvolvimento humano e inclusão social.</p>
                    <p class="italic">
                        Emprestar um olhar diferente na relação com as pessoas dando um passo adiante na implementação de programas e ações de forma a possibilitar mais proximidade, mais cuidados, mais cidadania e mais oportunidades, respeitando as diversidades, as vocações e as necessidades.
                    </p>
              </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading Yellow">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"> 
                    <h4 class="panel-title"> 
                     <div class="enjoy-css"></div>
                    Gestão
                    </h4>
                    <span class="Line"></span>
                </a>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body Body">
                    <p class="Strong">Desenvolvimento humano e inclusão social.</p>
                    <p class="italic">
                        Emprestar um olhar diferente na relação com as pessoas dando um passo adiante na implementação de programas e ações de forma a possibilitar mais proximidade, mais cuidados, mais cidadania e mais oportunidades, respeitando as diversidades, as vocações e as necessidades.
                    </p>
              </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading Yellow">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"> 
                    <h4 class="panel-title">
                     <div class="enjoy-css"></div>
                        Infraestrutura
                    </h4>
                    <span class="Line"></span>                  
                </a>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body Body">
                    <p class="Strong">Desenvolvimento humano e inclusão social.</p>
                    <p class="italic">
                        Emprestar um olhar diferente na relação com as pessoas dando um passo adiante na implementação de programas e ações de forma a possibilitar mais proximidade, mais cuidados, mais cidadania e mais oportunidades, respeitando as diversidades, as vocações e as necessidades.
                    </p>
              </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading Yellow">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"> 
                    <h4 class="panel-title">
                     <div class="enjoy-css"></div>
                        Desenvolvimento e meio ambiente
                    </h4>
                    <span class="Line"></span>                  
                </a>
            </div>
            <div id="collapse4" class="panel-collapse collapse">
                <div class="panel-body Body">
                    <p class="Strong">Desenvolvimento humano e inclusão social.</p>
                    <p class="italic">
                        Emprestar um olhar diferente na relação com as pessoas dando um passo adiante na implementação de programas e ações de forma a possibilitar mais proximidade, mais cuidados, mais cidadania e mais oportunidades, respeitando as diversidades, as vocações e as necessidades.
                    </p>
              </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading Yellow">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse5"> 
                    <h4 class="panel-title">
                     <div class="enjoy-css"></div>
                    Esporte, lazer e cultura
                    </h4>
                    <span class="Line"></span>                  
                </a>
            </div>
            <div id="collapse5" class="panel-collapse collapse">
                <div class="panel-body Body">
                    <p class="Strong">Desenvolvimento humano e inclusão social.</p>
                    <p class="italic">
                        Emprestar um olhar diferente na relação com as pessoas dando um passo adiante na implementação de programas e ações de forma a possibilitar mais proximidade, mais cuidados, mais cidadania e mais oportunidades, respeitando as diversidades, as vocações e as necessidades.
                    </p>
              </div>
            </div>
        </div>

    </div>

</div><!-- container -->
    @endsection