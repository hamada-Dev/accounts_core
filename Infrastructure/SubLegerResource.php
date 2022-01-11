<?php
namespace Infrastructure;

use Illuminate\Http\Resources\Json\JsonResource;
use Common\Handler\ColumsDatabase;

class SubLegerResource extends JsonResource
{
    use ColumsDatabase;


    public function toArray($request)
    {
        $colums = ['name', 'description'];

        foreach ($this->getEncrypt($colums) as $k => $v){
            $resource[$k] = $this->$v;
        }
    return $resource;

    }


}
