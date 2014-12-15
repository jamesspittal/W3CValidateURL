<?php
/**
 * W3CValidateURLUsageExample1.php
 *
 * This is a example usage script for the W3CValidateURL class.
 *
 * @package   W3CValidateURL
 * @copyright Copyright (c) 2011 - 2014 Web Marketing ROI (http://www.webmarketingroi.com.au)
 * @license   http://www.webmarketingroi.com.au/software-license   Web Marketing ROI Software License
 * @version   1.0
 * @link      https://github.com/jamesspittal/W3CValidateURL
 * @author    James Spittal (james@webmarketingroi.com.au)
 *
 */

// Load the W3CValidateURL class
require_once('classes/W3CValidateURL.php');

// Set the URL you would like to validate.
$url = 'http://www.webmarketingroi.com.au';

// Instantiate the W3CValidateURL class.
$W3CValidateURL = new WebMarketingROI\W3CValidateURL\W3CValidateURL($url);

// Check if the validation was successful or not and print a message accordingly.
if ($W3CValidateURL->passedValidation === true) {
    print("$url passed validation.\n");
}
else {
    print("$url did not pass validation.\n");
}
?>