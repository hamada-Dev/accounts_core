<?php
namespace Core\Crud\Get;
use Common\Handler\MessageResponse;
use Illuminate\Database\Eloquent\Model;

class Get implements IGet{
    use MessageResponse;
    public function get($type = 'all', Model $model, $paginater = null, $orderby = 'created_at', $orderType = 'asc')
    {
        return $model->orderBy($orderby,$orderType)
            ->when($paginater == null, function($query){
                return $query->get();
            },function($quer) use($paginater){
                return $quer->paginater($paginater);
            });
    }

}
