<?php
namespace Core\Commen;
class Encrypt implements IEncrypt{
    public function encrypt($key,$text,$vector): string
    {
        $options=0;
        $ciphering = "AES-128-CTR";
        $encryption_text = openssl_encrypt($text, $ciphering, $key, $options, $vector);
        return $encryption_text;
    }
}
