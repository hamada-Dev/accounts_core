<?php
namespace Core\Crud\Delete;

use Illuminate\Database\Eloquent\Model;

class Delete implements IDelete{
    public function delete(Model $model)
    {
        try {
            $model=$model->delete();
            return ['message' => 'Data deleted Successfully '];
        } catch (\Exception $ex) {
            return $ex;
        }

    }
}
