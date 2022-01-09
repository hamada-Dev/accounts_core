<?php
namespace Core\Crud\Edit;

use Illuminate\Database\Eloquent\Model;

interface IEdit{
    public function update($data,Model $model);
}
