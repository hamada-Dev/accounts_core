<?php
namespace Core\Crud\Delete;

use Common\Handler\MessageResponse;
use Illuminate\Database\Eloquent\Model;

class Delete implements IDelete{

    use  MessageResponse;

    public function delete(Model $model, $id)
    {
        try {
            $model->find($id)->delete();
            return ['message' => 'Data deleted Successfully '];
        } catch (\Throwable $e) {
            return $this->customApiResponse($e);
        }

    }
}
