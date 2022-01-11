<?php
namespace Core\Crud\Get;

use Illuminate\Database\Eloquent\Model;

interface IGet{
public function get($type='all',Model $model,$paginater=null,$orderby='created_at',$orderType='asc');
}
