<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class ClienteValidator extends LaravelValidator
{

    protected $rules = [
            'nome' => 'required|max:255',
            'telefone' => 'required',
            'endereco' => 'required',
            'cidade' => 'required',
            'bairro' => 'required',
            'estado' => 'required'
   ];


}
