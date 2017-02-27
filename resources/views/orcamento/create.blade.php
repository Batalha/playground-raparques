@extends('template')

@section('title')
    Playground
@endsection
@section('title-orcamento')
    <div style=" font-size: 14px;">
        <a href="{{url('2017')}}" style="color: #0088CC">Home</a>&nbsp;&nbsp;/&nbsp;&nbsp;Orçamento

    </div>
@endsection
@section('conteudo')

    <div class="container">
    <h1 style="margin-bottom: 20px; margin-top: 40px; color: #244C66;">ORÇAMENTO PLAYGROUND</h1>
        <form name="form" class="" role="form" method="post" action="{{route('orcamento.store')}}">

            <div class="space">
                <div class="row">
                    <div class="form-group col-md-6">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger alert-dismissable ">
                                <button class="close" data-dismiss="alert">&times</button>
                                <ul >
                                    @foreach ($errors->all() as $error)
                                        <li  style="margin-left: 10px;">
                                            {{ $error }}

                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        @endif
                        @if(Session::has('message'))
                            <div class="alert alert-success">
                                {{Session::get('message')}}
                            </div>
                        @endif
                    </div>

                </div>
                <div class="row">
                    <div class="form-group col-md-6 {{$errors->has('nome')? 'has-error':''}}" >
                        <input type="text" name="nome" id="" class="form-control" placeholder="Nome" value="{{Request::old('nome')}}">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 {{$errors->has('email')? 'has-error':''}}" >
                        <input type="text" name="email" id="" class="form-control" placeholder="E-mail" value="{{Request::old('email')}}">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 {{$errors->has('telefone')? 'has-error':''}}" >
                        <input type="text" name="telefone" id="telefone" class="form-control" placeholder="Telefone  " value="{{Request::old('telefone')}}">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 {{$errors->has('cidade')? 'has-error':''}}" >
                        <input type="text" name="cidade" id="" class="form-control" placeholder="Cidade" value="{{Request::old('cidade')}}">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 {{$errors->has('valor')? 'has-error':''}}" >
                        <select class="form-control" name="valor">
                            <option value="">Valor Aproximado do Investimento</option>
                            <option value="R$ 500 a 2000">De R$ 500 a 2.000</option>
                            <option value="R$ 2000 a 5.000">De R$ 2.000 a 5.000</option>
                            <option value="R$ 5.000 a 10.000">De R$ 5.000 a 10.000</option>
                            <option value="R$ 10.000 a 15.000">De R$ 10.000 a 15.000</option>
                            <option value="R$ 15.000 a 20.000">De R$ 15.000 a 20.000</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <textarea class="form-control" name="observacao" placeholder="Observaçao" ></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </div>
        </form>
        {{csrf_field()}}
    </div>
@endsection
