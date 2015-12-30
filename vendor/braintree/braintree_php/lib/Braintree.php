<?php
/**
 * Braintree PHP Library
 * Creates class_aliases for old class names replaced by PSR-4 Namespaces
 *
 * @copyright  2014 Braintree, a division of PayPal, Inc.
 */

require_once('autoload.php');

//if (version_compare(PHP_VERSION, '5.4.0', '<')) {
    //throw new Braintree_Exception('PHP version >= 5.4.0 required');
//}


function requireDependencies() {
   
//    $requiredExtensions = array('curl');
//    foreach ($requiredExtensions AS $ext) {
//        if (!extension_loaded($ext)) {
//            echo Braintree_Exception('The Braintree library requires the ' . $ext . ' extension.');
//        }
//        echo Braintree_Exception('The Braintree library requires the ' . $ext . ' extension.');exit;
//    }
     //echo PHP_VERSION;
}

requireDependencies();
