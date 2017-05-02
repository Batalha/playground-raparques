@extends('template')

    @section('title')
        Playground
    @endsection
    @section('title-playground')
        <div style=" font-size: 14px;">
            <a href="{{url('2017')}}" style="color: #0088CC;">Home</a>&nbsp;&nbsp;/&nbsp;&nbsp;Plauground
        </div>
    @endsection
    @section('conteudo')
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <h2>Parques em Madeira</h2>
                </div>
            </div>
            <div class="row" style="margin-top: 30px;">
                @foreach($imagens as $key=>$imagen)
                    <div class="col-md-3 col-sm-6 col-xs-12 borda">
                        <a class="imagem" href="#"
                           data-image-id=""
                           data-toggle="modal"
                           data-image="{{asset($imagen)}}"
                           data-target="#image-gallery">
                            <img id="" class="img-responsive img-thumbnail" src="{{asset($imagen)}}"/>
                            {{--<span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>--}}
                        </a>
                    </div>
                    {{--<div class="retina">--}}
                        {{--<i class="glyphicon glyphicon-fullscreen"></i>--}}
                    {{--</div>--}}
                @endforeach
            </div>

            <div  class="modal fade"
                    id="image-gallery"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="myModalLabel"
                    aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="image-gallery-title">Galeria de Parques em Madeira</h4>
                        </div>
                        <div class="modal-body">
                            <a id="show-previous-image" href="#carousel" class="left carousel-control" data-slide="prev">
                                <i class="glyphicon glyphicon-chevron-left glyphicon-circle-arrow-left"></i>
                            </a>
                            <img id="image-gallery-image" class="img-responsive" src="">
                            <a id="show-next-image" href="#carousel" class="right carousel-control" data-slide="next">
                                <i class="glyphicon glyphicon-chevron-right glyphicon-circle-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection


