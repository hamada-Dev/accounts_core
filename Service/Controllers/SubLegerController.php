<?php

namespace Service\Controllers;

use Common\Handler\MessageResponse;
use Core\Crud\Read\Read;
use Illuminate\Routing\Controller as BaseController;
use Infrastructure\SubLegerResource;
use Service\Requests\SubLegerRequest;
use Core\Crud\Create\Create;
use Core\Crud\Delete\Delete;
use Core\Crud\Edit\Edit;
use Domain\SubLeger\SubLeger;

class SubLegerController extends BaseController
{
    use MessageResponse;

    private $model;

    public function __construct(SubLeger $model)
    {
        $this->model = $model;
    }

    public function index(Read $red)
    {
        return $this->customApiResponseSuccess( SubLegerResource::collection($red->red('all',$this->model)) );
    }

    public function store(SubLegerRequest $request, Create $create)
    {
        return $create->store($request->data(), $this->model);
    }

    public function update(SubLegerRequest $request, Edit $edit, $id)
    {
        return $edit->update($request->data(), $this->model, $id);
    }

    public function destroy(Delete $delete, $id)
    {
        return $delete->delete($this->model, $id);
    }

}
