<?php

namespace App\Http\Controllers;

use App\Repositories\ClienteRepository;
use App\Services\ClienteService;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    /**
     * @var ClienteRepositoryEloquent
     */
    private $repository;
    /**
     * @var ClienteService
     */
    private $service;

    /**
     * ClienteController constructor.
     * @param ClienteRepository $repository
     * @param ClienteService $service
     */
    public function __construct(ClienteRepository $repository, ClienteService $service)
    {

        $this->repository = $repository;
        $this->service = $service;
    }

    public function index(){
        $clientes = $this->repository->all();

        return view('clientes.index', compact('clientes'));
    }

    public function store(Request $request){
        return $this->service->create($request->all());
    }


}
