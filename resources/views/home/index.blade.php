@extends('template')

    @section('title')
        Playground
    @endsection

    @section('slide')

        <div id="slideHome" class="container-slide">
            <div id="carousel" class="carousel slide">
                <ol class="carousel-indicators" style="">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                    <li data-target="#carousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner" role="listbox" data-ride="carousel" style="height: 500px;">
                    @foreach($imagens as $key=>$img)
                        <div class="item {{($key == 0)? 'active' :''}}"  >
                            <img src="{{asset($img)}}" alt="">
                        </div>
                    @endforeach
                </div>

                <a href="#carousel" class="left carousel-control" data-slide="prev">
                    <i class="glyphicon glyphicon-chevron-left glyphicon-circle-arrow-left"></i>
                </a>
                <a href="#carousel" class="right carousel-control" data-slide="next">
                    <i class="glyphicon glyphicon-chevron-right glyphicon-circle-arrow-right"></i>
                </a>
            </div>
        </div>
        {{--<h1 style="margin-top: 90px; ">Pagina Inicial</h1>--}}
    @endsection
    @section('title-home')
        <div>OLA Seja Bem Vindo! Conheça todos os Nossos Serviços PLAYGROUNDS!</div>
    @endsection
    @section('conteudo')

    @endsection
