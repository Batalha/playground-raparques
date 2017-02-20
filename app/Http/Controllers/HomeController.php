<?php

namespace App\Http\Controllers;

use App\Services\HomeService;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * @var HomeService
     */
    private $service;

    public function __construct(HomeService $service)
    {

        $this->service = $service;
    }

    public function index(){


        $imagens = $this->service->all();
        return view('home.index', compact('imagens'));
    }

}
