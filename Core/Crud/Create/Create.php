<?php
namespace Core\Crud\Create;

use Common\Handler\MessageResponse;
use Illuminate\Database\Eloquent\Model;

class Create implements ICreate{

    use  MessageResponse;

    public function store($data,Model $model)
    {
        return $this->customApiResponseSuccess($model->create($data), 'Data Added Successfully ');

    }
}
