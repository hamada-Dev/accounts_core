<?php
namespace Core\Crud\Edit;

use Common\Handler\MessageResponse;
use Domain\CostCenter\CostCenter;
use Illuminate\Database\Eloquent\Model;

class Edit implements IEdit{

    use  MessageResponse;

    public function update($data,Model $model, $id)
    {

        return $this->customApiResponseSuccess($model->find($id)->update($data), 'Data updated Successfully ');

//        try {
//            $model = $model->find($id)->update($data);
//            return ['message' => 'Data updated Successfully   88888888888 ', 'data' => $model];
//        } catch (\Throwable $e) {
//            return $this->customApiResponse($e);
//        }
    }
}
