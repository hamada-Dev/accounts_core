<?php
namespace Core\Crud\Create;

use Illuminate\Database\Eloquent\Model;

class Create implements ICreate{

    public function store($data,Model $model)
    {
        try {
            $model=$model->create($data);
            return ['message' => 'Data Insert Successfully ', 'data' => $model];
        } catch (\Exception $ex) {
            return $ex;
        }

    }
}
