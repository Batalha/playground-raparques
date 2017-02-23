<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\OrcamentoRepository;
use App\Entities\Orcamento;
use App\Validators\OrcamentoValidator;

/**
 * Class OrcamentoRepositoryEloquent
 * @package namespace App\Repositories;
 */
class OrcamentoRepositoryEloquent extends BaseRepository implements OrcamentoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Orcamento::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return OrcamentoValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
