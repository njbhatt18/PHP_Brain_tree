<?php

try {
   
       //require_once "./vendor/autoload.php";

    require_once "./vendor/braintree/braintree_php/lib/Braintree.php";
    //echo '<pre>1';
    Braintree_Configuration::environment("sandbox");
    Braintree_Configuration::merchantId("vph959ks37tyfvct");
    Braintree_Configuration::publicKey("g2sqrx7r3fy78fyg");
    Braintree_Configuration::privateKey("1e9271c9b2a1bb8f6495c5fc3a581c33");
    //echo '<pre>2:-'.$_REQUEST['payment_method_nonce'];
    //print_r($_REQUEST);
    $result = Braintree_Transaction::sale([
    'amount' => '10.00',
    'paymentMethodNonce' => $_REQUEST['payment_method_nonce'],
    ]);
    //echo '<pre>3';
     //print_r($result->success);
    //echo '<pre>4<pre>';
    if ($result->success) {
        echo("Success! Transaction ID: " . $result->transaction->id);
    } else if ($result->transaction) {
        echo("Error: " . $result->message);
        echo("<br/>");
        echo("Code: " . $result->transaction->processorResponseCode);
    } else {
        echo("Validation errors:<br/>");
        foreach (($result->errors->deepAll()) as $error) {
            echo("- " . $error->message . "<br/>");
        }
    }
} catch (Exception $ex) {
    echo "<pre>";
    print_r($ex->getMessage());
}
?>