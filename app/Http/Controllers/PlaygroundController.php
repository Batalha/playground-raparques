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
            11 => '/imagens/playground/play12.jpg',
            12 => '/imagens/playground/play13.jpg',
//            13 => '/imagens/playground/play14.jpg',
            14 => '/imagens/playground/play15.jpg',
            15 => '/imagens/playground/play16.jpg',
            16 => '/imagens/playground/play17.jpg',

            17 => '/imagens/playground/play18.jpg',
            18 => '/imagens/playground/play19.jpg',
            19 => '/imagens/playground/play20.jpg',
            20 => '/imagens/playground/play21.jpg',
            21 => '/imagens/playground/play22.jpg',
            22 => '/imagens/playground/play23.jpg',
            23 => '/imagens/playground/play24.jpg',
            24 => '/imagens/playground/play25.jpg',
            25 => '/imagens/playground/play26.jpg',
            26 => '/imagens/playground/play27.jpg',
            27 => '/imagens/playground/play28.jpg',
            28 => '/imagens/playground/play29.jpg',
            29 => '/imagens/playground/play30.jpg',
            30 => '/imagens/playground/play31.jpg',
            31 => '/imagens/playground/play32.jpg',
        ];

        return view('playground.index', compact('gallery'));
    }
}
