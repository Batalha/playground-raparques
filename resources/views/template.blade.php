<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    {{--<link href="{{asset('/css/app.css')}}" rel="stylesheet">--}}
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/template.css')}}" rel="stylesheet">
    <link href="{{asset('/css/playground.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body>

    {{--<div class="top_container">--}}
        {{--<div class="logo">--}}
            {{--R & A Parques--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="container" style="margin: 0px; padding: 0px;">--}}
        <div id="nav" class="navbar navbar-default navbar-outros ">
            <div class="navbar-header nave">
                <a class="navbar-brand" href="{{url('2017')}}">
                    {{--<img src="{{asset('/imagens/logo.fw.png')}}" alt="">--}}
                        <img id="image"  src="{{asset('/imagens/logo.fw.png')}}" alt="">
                    {{--<div id="logo"></div>--}}
                </a>
            </div>

            <div id="menu" class="menus navbar-right" style="margin-top: 75px;">
                <ul class="nav nav-tabs">
                    <li {{(request()->path() == "2017")? 'class=active':''}}><a href="{{url('2017')}}">PAGINA INICIAL</a></li>
                    <li {{(request()->path() == "2017/playground")? 'class=active':''}}><a href="{{url('2017/playground')}}">PLAYGROUND</a></li>
                    <li {{(request()->path() == "2017/orcamento")? 'class=active':''}}><a href="{{url('2017/orcamento')}}">ORÇAMENTO</a></li>
                    <li {{(request()->path() == "2017/contato")? 'class=active':''}}><a href="{{url('2017/contato')}}">FALE CONOSCO </a></li>

                </ul>
            </div>
        </div>
    {{--</div>--}}

    @yield('slide')
    <div id="{{(request()->path()!='2017')? 'topConteudo':'top_home'}}" class="container-fluid">
        <div class="panel panel-default " style="   ">
            <div class="panel-heading">
                <div class="conteudo-title" >
                    <div class="row" >
                        <div class="col-md-3 col-sm-6 col-xs-12" style="margin-left: 30px;">
                            <h3 class="panel-title">@yield('title-playground')</h3>
                            <h3 class="panel-title">@yield('title-orcamento')</h3>
                            <h3 class="panel-title">@yield('title-contato')</h3>
                        </div>
                    </div>
                            <h3 class="panel-title text-center">@yield('title-home')</h3>

                </div>
            </div>

            <div class="panel-body">
                @yield('conteudo')
            </div>

            <div class="panel-footer footer">
                <div class="container" style="">
                    <div class="row text-center"  style=" margin-top: 20px;">
                        {{--<div class="col-md-7">--}}
                            <p>© Copyright 2017. All Rights Reserved.</p>
                        {{--</div>--}}
                    </div>

                </div>
            </div>
        </div>
    </div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/js/jquery.mask.min.js')}}"></script>
<script src="{{asset('/js/modal-carousel.js')}}"></script>
<script src="{{asset('/js/google_maps.js')}}"></script>
<script src="{{asset('/js/main.js')}}"></script>
</body>
</html>