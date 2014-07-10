W3CValidateURL
==============

A simple little PHP class for doing W3C validation on a URL

Usage
-----

The usage of the `W3CValidateURL` class is designed to be simple. Simply instantiate an object of type `W3CValidateURL` and call the default constructor with the URL of the page you would like to check validation on.

From there, the default constructor will make a cURL call and handle the rest.

Afterwards, you can check the value of `$W3CValidateURL->passedValidation` which will be either `true` or `false` depending on whether the URL provided passed W3C validation or not.

```php
require_once('classes/W3CValidateURL.php');

$W3CValidateURL = new W3CValidateURL('http://www.webmarketingroi.com.au');

if ($W3CValidateURL->passedValidation === false) {
    // Alert the team by e-mail.
}
```
