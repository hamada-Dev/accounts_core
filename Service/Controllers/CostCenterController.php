<?php

namespace Service\Controllers;

use Common\Handler\MessageResponse;
use Illuminate\Routing\Controller as BaseController;
use Service\Requests\CostCenterRequest;
use Core\Crud\Create\Create;
use Core\Crud\Delete\Delete;
use Core\Crud\Edit\Edit;
use Core\Crud\Get\Get;
use Infrastructure\CostCenterEncryptResource;
use Domain\CostCenter\CostCenter;
use Common\Handler\ColumsDatabase;

class CostCenterController extends BaseController
{
    use MessageResponse;

    private $model;

    public function __construct(CostCenter $model)
    {
        $this->model = $model;
    }
    public function index(Get $get)
    {
        return $this->customApiResponseSuccess( CostCenterEncryptResource::collection($get->get('all',$this->model)) );
    }
    public function store(CostCenterRequest $request, Create $create)
    {
        return $create->store($request->data(), $this->model);
    }

    public function update(CostCenterRequest $request, Edit $edit, $id)
    {
        return $edit->update($request->data(), $this->model, $id);
    }

    public function destroy(Delete $delete, $id)
    {
        return $delete->delete($this->model, $id);
    }
}



