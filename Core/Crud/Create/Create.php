<?php
namespace Core\Crud\Create;

use Common\Handler\MessageResponse;
use Illuminate\Database\Eloquent\Model;

class Create implements ICreate{

    use  MessageResponse;

    public function store($data,Model $model)
    {
        try {
            $model=$model->create($data);
            return ['message' => 'Data Insert Successfully ', 'data' => $model];
        } catch (\Throwable $e) {
            return $this->customApiResponse($e);
        }

    }
}
