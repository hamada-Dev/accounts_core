<?php
namespace Core\Crud\Read;
use Illuminate\Database\Eloquent\Model;

interface IRead{
    public function red($type='all',Model $model,$paginater= null,$orderby='created_at',$orderType='asc');
}
