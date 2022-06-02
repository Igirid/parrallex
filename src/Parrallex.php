<?php

namespace Igirid;

use phpseclib3\Crypt\Rijndael;


class Parrallex
{
    protected $iv;

    protected $key;

    public function __construct( $iv, $key)
    {
        $this->iv = $iv;
        $this->key = $key;
    }

    public function encryptPayload($data)
    {
        $jsonData = json_encode($data);

        $cipher = new Rijndael('cbc');

        $cipher->setIV($this->iv);
        $cipher->setKey($this->key);

        $ciphertext = $cipher->encrypt($jsonData);

        $encryptedHex = bin2hex($ciphertext);

        return $encryptedHex;
    }

    public function decryptPayload($hexData)
    {
        $data = hex2bin($hexData);

        $cipher = new Rijndael('cbc');

        $cipher->setKeyLength(128);
        $cipher->setIV($this->iv);
        $cipher->setKey($this->key);

        $binPlainText = $cipher->decrypt($data);

        $decodedData = json_decode($binPlainText, true);

        return $decodedData;
    }
}
