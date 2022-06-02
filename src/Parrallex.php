<?php

namespace Igirid;

use phpseclib3\Crypt\Rijndael;


class Parrallex
{
    protected $iv;

    protected $key;
    
    public function __construct($iv, $key)
    {
        $this->iv = $iv;

        $this->key = $key;
    }

    public function encryptPayload(String $data)
    {
        $cipher = new Rijndael('cbc');

        $cipher->setIV($this->iv);
        $cipher->setKey($this->key);

        $ciphertext = $cipher->encrypt($data);

        return $ciphertext;
    }

    public function decryptPayload(String $data)
    {
        $cipher = new Rijndael('cbc');

        $cipher->setKeyLength(128);
        $cipher->setIV($this->iv);
        $cipher->setKey($this->key);

        $plaintext = $cipher->decrypt($data);

        return $plaintext;
    }
}
