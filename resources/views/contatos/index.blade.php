@extends('template')

@section('title')
    Contato
@endsection
@section('title-contato')
    <div style=" font-size: 14px;">
        <a href="{{url('2017')}}" style="color: #0088CC">Home</a>&nbsp;&nbsp;/&nbsp;&nbsp;Contato

    </div>
@endsection
@section('conteudo')

    <div class="container-fluid">
        <div class="row" style="border: 0px solid;">
            <div class="col-md-8" style="border: 0px solid; padding: 0px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30741.16480503294!2d-47.668879723886555!3d-15.610568478237377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a6d285a1c1ce7%3A0x43721212ac257c88!2s27+-+St.+Res.+Norte+A+EQ+6+-+Planaltina%2C+Bras%C3%ADlia+-+DF!5e0!3m2!1spt-BR!2sbr!4v1487270577036"
                        width="100%"
                        height="400px"
                        frameborder="0"
                        style="border:1px solid"
                        allowfullscreen>
                </iframe>
            </div>
            <div class="col-md-4">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-14 text-center">
                            <h4 style="font-weight: bold; color: #244C66;">Fale Conosco</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-14 text-justify" style="  padding: 0px;">
                            <p style="font-weight:500;">Entre em contato com a R&A PARQUES para tirar suas dúvidas. Sua opinião também é muito importante para nós!</p>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-14 text-center">

                            <h4 style="font-weight: bold; color: #244C66;">Entre em Contato</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-14">
                            <ul class="list-unstyled">
                                <li><i class="glyphicon glyphicon-map-marker"></i><strong>Endereço: </strong>Setor Residencial Norte A, Q.6 Conj. 6H Casa 21 <br> 73340-608 <br> Planaltina - DF</li>
                                <li><i class="glyphicon glyphicon-earphone"></i><strong>Telefone:</strong>  (61) 99238-8937</li>
                                <li><i class="glyphicon glyphicon-envelope"></i><strong>E-mail:</strong> <a href="mailto:umdiano@gmail.com.br">umdiano@gmail.com</a></li>
                            </ul>

                            <hr />

                            <h4><strong>Atendimento</strong></h4>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-time"></i>Segunda á Domingo - Qualquer Horario!</li>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
