<?php

namespace Service\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Service\Requests\AccountRequest;
use Core\Crud\Create\Create;
use Core\Crud\Delete\Delete;
use Core\Crud\Edit\Edit;
use Domain\Account\Account;

class AcountController extends BaseController
{

    private $model;

    public function __construct(Account $model)
    {
        $this->model = $model;
    }

    public function store(AccountRequest $request, Create $create)
    {
        return $create->store($request->data(), $this->model);
    }

    public function update(AccountRequest $request, Edit $edit, $id)
    {
        return $edit->update($request->data(), $this->model, $id);
    }

    public function destroy(Delete $delete, $id)
    {
        return $delete->delete($this->model, $id);
    }
}
