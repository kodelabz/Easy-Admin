<?php
namespace EasyView\EasyView\Core;

use App\Core\DB\Repository as DBRepository;
use EasyView\EasyView\Exceptions\InvalidMetadataException;
use Illuminate\Support\Facades\DB;

class Repository extends DBRepository
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
        parent::__construct();
    }

    public function getOpenFields(){
       return array_diff($this->getFillable(),$this->getHidden());
    }

    public function describe(){
        $table = $this->model->getTable();
        if ($table == null)
            throw new InvalidMetadataException(" Model Must have a field :table");

        return DB::select("describe $table");
    }

    function model(): string
    {
        return $this->model;
    }
}
