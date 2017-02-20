<?php
/**
 * Created by PhpStorm.
 * User: celio_000
 * Date: 17/01/2017
 * Time: 12:52
 */

namespace App\Services;


use App\Repositories\ClienteRepository;
use App\Repositories\OrcamentoRepository;
use App\Validators\OrcamentoValidator;

use App\Mail\MyMail;
use Illuminate\Mail\Mailer;

class OrcamentoService
{
    /**
     * @var ClienteRepository
     */
    private $repository;
    /**
     * @var Mailer
     */
    private $mailer;
    /**
     * @var MyMail
     */
    private $mail;

    /**
     * OrcamentoService constructor.
     * @param OrcamentoRepository $repository
     * @param OrcamentoValidator $validator
     */
    public function __construct(OrcamentoRepository $repository, MyMail $mail, Mailer $mailer)
    {

        $this->repository = $repository;
        $this->mailer = $mailer;
        $this->mail = $mail;
    }

    public function create(array $data){

        $this->mailer
            ->to('celio.batalha@gmail.com')
            ->cc('umdiano@gmail.com')
            ->send(
                $this->mail
                    ->subject('Orçamento de Parques em Madeira')
                    ->view(
                        'email.mymail',[
                        'nome'          =>$data['nome'],
                        'email'         =>$data['email'],
                        'telefone'      =>$data['telefone'],
                        'cidade'        =>$data['cidade'],
                        'valor'         =>$data['valor'],
                        'observacao'    =>$data['observacao'],
                    ])

            );
       return $this->repository->create($data);
    }
}