<?php
namespace Core\Commen;
interface IDecrypt{
    public function decrypt($key,$ciper_text,$vector):string;
}
