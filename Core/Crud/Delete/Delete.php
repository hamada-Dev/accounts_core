<?php
namespace Core\Crud\Delete;

use Common\Handler\MessageResponse;
use Illuminate\Database\Eloquent\Model;

class Delete implements IDelete{

    use  MessageResponse;

    public function delete(Model $model, $id)
    {
        return $this->customApiResponseSuccess($model->find($id)->delete(), 'Data deleted Successfully ');
    }
}
