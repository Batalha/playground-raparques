<?php
/**
 * Created by PhpStorm.
 * User: celio_000
 * Date: 17/01/2017
 * Time: 12:52
 */

namespace App\Services;


use App\Repositories\ClienteRepository;
use App\Validators\ClienteValidator;
use Prettus\Validator\Exceptions\ValidatorException;

class ClienteService
{
    /**
     * @var ClienteRepository
     */
    private $repository;
    /**
     * @var ClienteValidator
     */
    private $validator;

    public function __construct(ClienteRepository $repository, ClienteValidator $validator)
    {

        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function create(array $data){

        try{
            $this->validator->with($data)->passesOrFail();
            return $this->repository->create($data);
        }catch(ValidatorException $e){
            return [
                'error' => true,
                'message' => $e->getMessageBag()
            ];
        }



    }

    public function update(array $data, $id){

        return $this->repository->update($data, $id);
    }

}