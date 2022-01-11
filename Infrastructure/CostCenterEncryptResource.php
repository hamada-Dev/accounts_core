<?php
namespace Infrastructure;

use Illuminate\Http\Resources\Json\JsonResource;
use Core\Commen\Encrypt;
class CostCenterEncryptResource extends JsonResource
{

private $key='hash';
private $vector='1234567891234567';

    public function toArray($request)
    {
        $enc = new Encrypt();
        return [
            $enc->encrypt($this->key,'name',$this->vector)=>$this->name,
            $enc->encrypt($this->key,'description',$this->vector)=>$this->description,
        ];
    }
}
