<?php
/**
 * Created by PhpStorm.
 * User: celio_000
 * Date: 17/01/2017
 * Time: 12:52
 */

namespace App\Services;


use App\Repositories\ClienteRepository;
use App\Repositories\HomeRepository;
use App\Validators\ClienteValidator;
use Prettus\Validator\Exceptions\ValidatorException;

class HomeService
{
    /**
     * @var ClienteRepository
     */
    private $repository;
    /**
     * @var ClienteValidator
     */
    private $validator;

    public function __construct(HomeRepository $repository)
    {

        $this->repository = $repository;
    }

    public function all(){

        $imagens = [
            0 => '/imagens/slide/slide1.jpg',
            1 => '/imagens/slide/slide2.jpg',
            2 => '/imagens/slide/slide3.jpg',
            3 => '/imagens/slide/slide4.jpg'
        ];

        return $imagens;

    }

}