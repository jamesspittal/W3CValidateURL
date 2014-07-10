W3CValidateURL
==============

A simple little PHP class for doing W3C validation on a URL

Usage
-----

```php
require_once('classes/W3CValidateURL.php');

$W3CValidateURL = new W3CValidateURL('http://www.webmarketingroi.com.au');
if ($W3CValidateURL->passedValidation === false) {
    // Alert the team by e-mail.
}
```
