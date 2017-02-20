<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrcamentoRequest;
use App\Repositories\OrcamentoRepository;
use App\Services\OrcamentoService;


class OrcamentoController extends Controller
{
    //

    /**
     * @var OrcamentoRepository
     */
    private $service;


    public function __construct(OrcamentoService $service)
    {

        $this->service = $service;
    }


    public function index(){
        return view('orcamento.index');
    }

    public function create(){
        return view('orcamento.create');
    }

    public function store(OrcamentoRequest $request){
       $orcamento = $this->service->create($request->all());
        return redirect()->route('orcamento')->withMessage('Email enviado com sucesso');

    }




}
