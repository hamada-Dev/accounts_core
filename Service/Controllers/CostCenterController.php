<?php

namespace Service\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Service\Requests\CostCenterRequest;
use Core\Crud\Create\Create;
use Core\Crud\Delete\Delete;
use Core\Crud\Edit\Edit;
use Domain\CostCenter\CostCenter;

class CostCenterController extends BaseController
{

    private $model;

    public function __construct(CostCenter $model)
    {
        $this->model = $model;
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
