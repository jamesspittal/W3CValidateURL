<?php
/**
 * W3CValidateURL.php
 *
 * This is a simple PHP class for checking W3C validation on a provided URL.
 *
 * W3C validation is an important SEO metric and in large distributed teams of developers/designers
 * each regularly pushing updates to the production server, it can be very hard to stay error free
 * in terms of W3C Validation - but it's very important to do so from an on-page SEO perspective.
 *
 * It also 'forces' the team into producing better code quality and better coding standards.
 *
 * You can build it into a simple little cron task that checks on a daily basis whether your website
 * website is successfully validated.
 *
 * Usage:
 *  $W3CValidateURL = new W3CValidateURL('http://www.webmarketingroi.com.au');
 *  if ($W3CValidateURL->passedValidation === false)
 *    alertTheTeam();
 *
 * @package   W3CValidateURL
 * @copyright Copyright (c) 2011 - 2014 Web Marketing ROI (http://www.webmarketingroi.com.au)
 * @license   http://www.webmarketingroi.com.au/software-license   Web Marketing ROI Software License
 * @version   1.0
 * @link      https://github.com/jamesspittal/W3CValidateURL
 * @author    James Spittal (james@webmarketingroi.com.au)
 *
 */

class W3CValidateURL
{
    var $passedValidation;

    /**
     * Default constructor.
     */
    function __construct($urlToValidate)
    {
        $this->passedValidation = false;

        $urlToValidate = urlencode($urlToValidate);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://validator.w3.org/check?uri='.$urlToValidate);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        $htmlResponse = curl_exec($ch);
        curl_close($ch);

        $htmlResponse = str_replace(array("\n", "\r", "\t", " "), '', $htmlResponse);

        $isValid = substr_count($htmlResponse, "[Valid]");

        if ($isValid == 1) {
            $this->passedValidation = true;
        }
    }

    /**
     * Default class destructor.
     */
    function __destruct()
    {
        // ..
    }
}
?>