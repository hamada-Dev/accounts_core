<?php
namespace Core\Crud\Read;
use Common\Handler\MessageResponse;
use Illuminate\Database\Eloquent\Model;


class Read implements IRead{

    use  MessageResponse;

    public function red($type = 'all', Model $model, $paginater = null, $orderby = 'created_at', $orderType = 'asc')
    {
        return $model->orderBy($orderby,$orderType)
                    ->when($paginater == null, function($query){
                                return $query->get();
                        },function($quer) use($paginater){
                                return $quer->paginater($paginater);
                        });
    }

}
