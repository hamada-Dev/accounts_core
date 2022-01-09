<?php
namespace Core\Crud\Delete;

use Illuminate\Database\Eloquent\Model;

interface IDelete{
    public function delete(Model $model);
}
