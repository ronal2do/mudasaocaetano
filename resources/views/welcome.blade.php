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
                    <p class="Strong">São Caetano que cuida e acolhe todas as gerações.</p>
                    <p class="italic">
                            Áreas: educação, saúde, terceira idade, mulheres, 
                            diversidade, portadores e segurança
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
                    <p class="Strong">São Caetano da eficiência, transparência e participação. </p>
                    <p class="italic">
                       Área: gestão e TI.
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
                    <p class="Strong">São Caetano que pensa o futuro e faz o que deve ser feito hoje.</p>
                    <p class="italic">
                       Áreas: habitação, mobilidade, saneamento, recursos hídricos,merendarem,mudo do solo.
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
                    <p class="Strong">São Caetano da oportunidade e que cuida do amanhã. </p>
                    <p class="italic">
                        Desenvolvimento econômico, relações de trabalho e sustentabilidade e meio ambiente
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
                    <p class="Strong">São Caetano do esporte, da arte e do lazer.</p>
                    <p class="italic">
                      
                    </p>
              </div>
            </div>
        </div>

    </div>

</div><!-- container -->
    @endsection