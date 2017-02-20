<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaygroundController extends Controller
{

    public function index(){

        $gallery = [
            0 => '/imagens/playground/play1.jpg',
            1 => '/imagens/playground/play2.jpg',
            2 => '/imagens/playground/play3.jpg',
            3 => '/imagens/playground/play4.jpg',
            4 => '/imagens/playground/play5.jpg',
            5 => '/imagens/playground/play6.jpg',
            6 => '/imagens/playground/play7.jpg',
            7 => '/imagens/playground/play8.jpg',
            8 => '/imagens/playground/play9.jpg',
            9 => '/imagens/playground/play10.jpg',
            10 => '/imagens/playground/play11.jpg',
//            11 => '/imagens/playground/play12.jpg',
            12 => '/imagens/playground/play13.jpg',
//            13 => '/imagens/playground/play14.jpg',
            14 => '/imagens/playground/play15.jpg',
            15 => '/imagens/playground/play16.jpg',
            16 => '/imagens/playground/play17.jpg',
        ];

        return view('playground.index', compact('gallery'));
    }
}
