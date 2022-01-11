<?php
namespace Core\Commen;
class Decrypt implements IDecrypt{
    public function decrypt($key,$ciper_text,$vector) :string
    {
        $options=0;
        $ciphering = "AES-128-CTR";
        $decryption_text = openssl_decrypt($ciper_text, $ciphering, $key, $options, $vector);
        return $decryption_text;
    }
}
