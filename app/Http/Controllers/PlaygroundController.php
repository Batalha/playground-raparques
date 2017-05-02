<?php

namespace App\Http\Controllers;

use App\Repositories\GaleriaRepository;
use Illuminate\Http\Request;

class PlaygroundController extends Controller
{

    /**
     * @var GaleriaRepository
     */
    private $repository;

    public function __construct(GaleriaRepository $repository)
    {

        $this->repository = $repository;
    }

    public function index(){


        $gallery = $this->repository->orderBy('id','desc')->all();

        foreach($gallery as $key=>$ga){
            $imagens[] = $ga['arquivo'];
        }
//            dd($imagens);

        return view('playground.index', compact('imagens'));
    }
}
