<?php

declare(strict_types=1);

use Igirid\Parrallex;
use PHPUnit\Framework\TestCase;

final class ParrallexTest extends TestCase
{
    protected static $iv = '/3RtA+rK20ugFK6+';

    protected static $key = 'WcU7Vd9I7FAEGfr+';

    public function testCanEncrypt(): void
    {
        $ciphertext = 'f1d8df84add53140543f041a1c08a9b8bdaebbf81759388b4d45a856b23423c44d512743933945a359d743d45e52890d';
        $data = ['name' => 'Igiri David', 'action' => 'test'];
        $parrallex = new Parrallex(static::$iv, static::$key);
        $this->assertSame($ciphertext, $parrallex->encryptPayload($data));
    }

    public function testCanDecrypt(): void
    {
        $data = ['name' => 'Igiri David', 'action' => 'test'];
        $ciphertext = 'f1d8df84add53140543f041a1c08a9b8bdaebbf81759388b4d45a856b23423c44d512743933945a359d743d45e52890d';
        $parrallex = new Parrallex(static::$iv, static::$key);
        $this->assertSame($data, $parrallex->decryptPayload($ciphertext));
    }
}
