<?php
namespace Core\Crud\Create;
use Illuminate\Database\Eloquent\Model;

interface ICreate{
 public function store($data,Model $model);
}
