<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MUDA SÃO CAETANO</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/css/app.css" />

  </head>
  <body>

    <section class="Header">    
    <div class="Linha"></div>
        <div class="container ">
            <div class="col-md-8 col-md-offset-2">
                        <hr style="height:2px;border-width:0;color:white;background-color:white">
                <div class="col-md-8">
                    <p class="Muda">MUDA <br>SÃO <br>CAETANO</p>

                    <a href="/"><div class="Muda-logo"></div></a>
                </div>

                <div class="col-md-4 box">
                    <div class="row bet_time">
                       <div class="Passarinho"></div>
                    </div>
                    <div class="row right"> 
                        <div class="panel panel-default" style="float: right; margin-top:45px;">
                           
                            <div class="panel-heading Yellow sug">
                               <a href="/sugestao">
    
                                    <h4 class="panel-title medium"> 
                                     <div class="enjoy-css"></div>
                                        Sugestão
                                    </h4>
                                    </a>
                            </div>
                        </div>

                    </div>
                   
                </div>
            </div> 

            <div class="col-md-8 col-md-offset-2">
            <hr style="height:2px;border-width:0;color:white;background-color:white">
                <p class="Frase text-center">
                    ciclo de debates para a elaboração do programa de governo do psdb
                </p>
            </div>

        </div> 
    
    </section>
    @yield('banner')
    @yield('content')
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>

    <script type="text/javascript" src="./assets/js/app.js"></script>
<script>
    
jQuery(function() {

    jQuery('.panel').on('show', function (e) {
         jQuery(e.target).prev('.panel-heading').find('.collapsed').addClass('active');
    });
    
    jQuery('.panel').on('hide', function (e) {
        jQuery(this).find('.collapsed').not(jQuery(e.target)).removeClass('active');
    });
        
});
</script>
    @include('sweet::alert')  
  </body>
</html>