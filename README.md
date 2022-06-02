# parrallex

Encryption and decryption algorithms for parrallex [https://parallexbank.com](https://parallexbank.com/)

```php
<?php
use Igirid\Parrallex;


$ciper = new Parrallex($iv, $key);
// Encrypt Payload
$data = [
    "username" => 'your username',
    "password" => "your password",
];
$payload = json_encode($ciper->encryptPayload($data));

// Decrypt Response
$decryptedResponse = $ciper->decryptPayload($encryptedHexResponseFromParrallexServer);

```

## Installation

### With Composer

```
$ composer require igirid/parrallex
```

```json
{
    "require": {
        "igirid/parrallex": "^1.0.0"
    }
}
```

```php
<?php
require 'vendor/autoload.php';

use Igirid\Parrallex;

$ciper = new Parrallex($iv, $key);

// Decrypt Response
$decryptedResponse = $ciper->decryptPayload($encryptedHexResponseFromParrallexServer);
```



## Security contact information

To report a security vulnerability, please send an email
[igiridavid2@gmail.com](mailto:igiridavid2@gmail.com).
Igiri David will contribute the fix and disclosure.

## Credits

### Contributors

This project exists thanks to all the people who contribute. 

<a href="https://github.com/Igirid/Parrallex/graphs/contributors" target="_blank">Contributors</a>


