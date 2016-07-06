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
                    <p class="Strong">São Caetano que cuida e acolhe todas as gerações</p>
                    <p class="italic">
                           Um governo só se justifica se for para cuidar das pessoas. Esse cuidado deve ser reflexo das políticas públicas levadas a cabo pela prefeitura. E aqui não há espaço para opções. Todos, absolutamente todos devem receber a mesma atenção. Por isso dizemos que nosso governo vai acolher e cuidar de todas as gerações, articulando as políticas das áreas sociais em um trabalho multidisciplinar e de interdisciplinaridade, com foco absoluto na humanização dos serviços prestados à população.
                    </p>   
                    <p class="italic">          
                           Compõem esse eixo as áreas da Educação, Saúde, terceira idade, mulheres, diversidade, portadores de necessidades especiais e Segurança.

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
                    <p class="Strong">São Caetano da eficiência, transparência e participação </p>
                    <p class="italic">
                       Administrar uma cidade exige levar mais qualidade de vida para a população. Os recursos investidos, que têm origem nos impostos pagos pelo cidadão, devem ser bem aplicados e gerar resultados positivos. Em momentos de crise econômica, se impõe o fazer mais com menos. E, para isso, é fundamental uma gestão capacitada, focada no planejamento e, principalmente, submetida a um controle social que apresente a transparência de todas as suas ações como garantia de boa aplicação dos recursos públicos.
                    </p>   
                    <p class="italic">  
                       Este é o compromisso que assumimos com São Caetano, expresso nesse eixo de nosso programa de governo, que trata das áreas de gestão e TI.

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
                    <p class="Strong">São Caetano que pensa o futuro e faz hoje o que deve ser feito</p>
                    <p class="italic">
                       Resolver as demandas presentes passa por recuperar programas e ações de sucesso que marcaram São Caetano e fizeram dela referência, reinaugurando uma relação que é próxima, moderna e dinâmica, que não teme entraves nem se esconde atrás de desculpas. É pensar, de forma integrada, estratégica e consequente, o desenvolvimento urbano da cidade, retomando parcerias com outras esferas de governo e com a iniciativa privada, entendendo que um lugar com o potencial de São Caetano vai muito além da zeladoria.
                    </p>   
                    <p class="italic">  
                       Habitação, mobilidade urbana, saneamento básico, recursos hídricos e uso do solo são áreas contempladas nesse eixo.
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
                    <p class="Strong">São Caetano da oportunidade e que cuida do amanhã </p>
                    <p class="italic">
                        É dever da prefeitura desenvolver políticas públicas que apoiem, capacitem, descentralizem e facilitem a geração de emprego, os novos negócios, a economia solidária, as empresas já instaladas, que respeite arranjos produtivos e vocações e avance nas oportunidades, da grande indústria ao pequeno empreendedor, passando pelas novas tecnologias.
                    </p>   
                    <p class="italic">    
                        E tudo isso em harmonia com o meio ambiente, passos firmes em direção a uma cidade mais arborizada, limpa e cuidada.
                        Participam desse conjunto de ações as áreas do desenvolvimento econômico, relações de trabalho, sustentabilidade e meio ambiente.

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
                    <p class="Strong">São Caetano do esporte, da arte e do lazer</p>
                    <p class="italic">
                      A São Caetano da cultura demanda políticas que incentivem espaços, plateias e produção. A São Caetano em movimento – das atividades físicas para todos ao esporte de alto rendimento, que já ganhou estádios e ginásios – demanda ações que promovam programas, treinamentos, competições e atletas dos diversos níveis. A São Caetano do convívio demanda parques, praças e espaços de lazer revitalizados, com equipamentos e atividades à disposição de seus frequentadores. A São Caetano que queremos exige uma gestão que abrace essas demandas com planejamento, parcerias e competência.
                    </p>   
                    <p class="italic">  
                      As áreas do esporte, da cultura e do lazer fazem parte desse eixo programático.

                    </p>
              </div>
            </div>
        </div>

    </div>

</div><!-- container -->
    @endsection