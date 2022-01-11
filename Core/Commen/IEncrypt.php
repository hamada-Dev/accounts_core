<?php
namespace Core\Commen;
interface IEncrypt{
    public function encrypt($key,$text,$vector):string;
}
