<?php
namespace Core\Crud\Edit;

use Illuminate\Database\Eloquent\Model;

class Edit implements IEdit{

    public function update($data,Model $model)
    {
        try {
            $model=$model->update($data);
            return ['message' => 'Data updated Successfully ', 'data' => $model];
        } catch (\Exception $ex) {
            return $ex;
        }
    }
}
