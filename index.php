<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!--<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://js.braintreegateway.com/v2/braintree.js"></script>
    </head>
    <body>
        
        <?php
            try{
                //generate the client token for sdk.
                require './vendor/autoload.php';
                Braintree_Configuration::environment('sandbox');
                Braintree_Configuration::merchantId('vph959ks37tyfvct');
                Braintree_Configuration::publicKey('g2sqrx7r3fy78fyg');
                Braintree_Configuration::privateKey('1e9271c9b2a1bb8f6495c5fc3a581c33');

                $clientToken = "MIIBCgKCAQEA3VhYQgMYkfCg9zt3qX/qf/9HGOE9X5QjG64M7zKdYhXXnpkQRFeJsjqQm361LPAZzoHn0+HkNTYYfmLeSpVyENF6tF7QU39qtrt3uYk0KucOKjCMEyewzRHB+uzsgPC5w5MceJFt8tfKvN38pQU2tFQCdLKm/khqqlO7lQXyhGK8a5cJSGXJEWqFz1A7gF2xCcuQBXhvayDKCF6qRi8uDx99CPKiLk6BUmHGTRkMZZIFAs6G45W8IFA/KD5r";
                
                
            } catch (Exception $ex) {
                echo "<pre>";
                print_r($ex->getMessage());
            }
            
        ?>
        <script src="https://js.braintreegateway.com/v2/braintree.js"></script>
        <script>
            // We generated a client token for you so you can test out this code
            // immediately. In a production-ready integration, you will need to
            // generate a client token on your server (see section below).
            var clientToken = "eyJ2ZXJzaW9uIjoyLCJhdXRob3JpemF0aW9uRmluZ2VycHJpbnQiOiI0MThkMDUzYzA1NmMzODYxMDlmMzJjMmM3NDcxMzc2MmU2ZWE3OGQwMjZhNWZmMzAyMTRhYzI5MGU2ZDBmNzAyfGNyZWF0ZWRfYXQ9MjAxNS0xMS0wNFQwNjo0MToyMi42MTExMDA2MjkrMDAwMFx1MDAyNm1lcmNoYW50X2lkPTM0OHBrOWNnZjNiZ3l3MmJcdTAwMjZwdWJsaWNfa2V5PTJuMjQ3ZHY4OWJxOXZtcHIiLCJjb25maWdVcmwiOiJodHRwczovL2FwaS5zYW5kYm94LmJyYWludHJlZWdhdGV3YXkuY29tOjQ0My9tZXJjaGFudHMvMzQ4cGs5Y2dmM2JneXcyYi9jbGllbnRfYXBpL3YxL2NvbmZpZ3VyYXRpb24iLCJjaGFsbGVuZ2VzIjpbXSwiZW52aXJvbm1lbnQiOiJzYW5kYm94IiwiY2xpZW50QXBpVXJsIjoiaHR0cHM6Ly9hcGkuc2FuZGJveC5icmFpbnRyZWVnYXRld2F5LmNvbTo0NDMvbWVyY2hhbnRzLzM0OHBrOWNnZjNiZ3l3MmIvY2xpZW50X2FwaSIsImFzc2V0c1VybCI6Imh0dHBzOi8vYXNzZXRzLmJyYWludHJlZWdhdGV3YXkuY29tIiwiYXV0aFVybCI6Imh0dHBzOi8vYXV0aC52ZW5tby5zYW5kYm94LmJyYWludHJlZWdhdGV3YXkuY29tIiwiYW5hbHl0aWNzIjp7InVybCI6Imh0dHBzOi8vY2xpZW50LWFuYWx5dGljcy5zYW5kYm94LmJyYWludHJlZWdhdGV3YXkuY29tIn0sInRocmVlRFNlY3VyZUVuYWJsZWQiOnRydWUsInRocmVlRFNlY3VyZSI6eyJsb29rdXBVcmwiOiJodHRwczovL2FwaS5zYW5kYm94LmJyYWludHJlZWdhdGV3YXkuY29tOjQ0My9tZXJjaGFudHMvMzQ4cGs5Y2dmM2JneXcyYi90aHJlZV9kX3NlY3VyZS9sb29rdXAifSwicGF5cGFsRW5hYmxlZCI6dHJ1ZSwicGF5cGFsIjp7ImRpc3BsYXlOYW1lIjoiQWNtZSBXaWRnZXRzLCBMdGQuIChTYW5kYm94KSIsImNsaWVudElkIjpudWxsLCJwcml2YWN5VXJsIjoiaHR0cDovL2V4YW1wbGUuY29tL3BwIiwidXNlckFncmVlbWVudFVybCI6Imh0dHA6Ly9leGFtcGxlLmNvbS90b3MiLCJiYXNlVXJsIjoiaHR0cHM6Ly9hc3NldHMuYnJhaW50cmVlZ2F0ZXdheS5jb20iLCJhc3NldHNVcmwiOiJodHRwczovL2NoZWNrb3V0LnBheXBhbC5jb20iLCJkaXJlY3RCYXNlVXJsIjpudWxsLCJhbGxvd0h0dHAiOnRydWUsImVudmlyb25tZW50Tm9OZXR3b3JrIjp0cnVlLCJlbnZpcm9ubWVudCI6Im9mZmxpbmUiLCJ1bnZldHRlZE1lcmNoYW50IjpmYWxzZSwiYnJhaW50cmVlQ2xpZW50SWQiOiJtYXN0ZXJjbGllbnQzIiwiYmlsbGluZ0FncmVlbWVudHNFbmFibGVkIjp0cnVlLCJtZXJjaGFudEFjY291bnRJZCI6ImFjbWV3aWRnZXRzbHRkc2FuZGJveCIsImN1cnJlbmN5SXNvQ29kZSI6IlVTRCJ9LCJjb2luYmFzZUVuYWJsZWQiOmZhbHNlLCJtZXJjaGFudElkIjoiMzQ4cGs5Y2dmM2JneXcyYiIsInZlbm1vIjoib2ZmIn0=";

            braintree.setup(clientToken, "dropin", {
                container: "payment-form"
            });
        </script>
        <form id="checkout" method="post" action="payment.php">
            <div id="payment-form"></div>
            <input type="submit" value="Pay $10">
        </form>
        
    </body>
</html>-->
<html>
  <head>
  </head>
  <body>
       <?php
            try{
                //generate the client token for sdk.
                require './vendor/autoload.php';
                Braintree_Configuration::environment('sandbox');
                Braintree_Configuration::merchantId('vph959ks37tyfvct');
                Braintree_Configuration::publicKey('g2sqrx7r3fy78fyg');
                Braintree_Configuration::privateKey('1e9271c9b2a1bb8f6495c5fc3a581c33');

                $clientToken = Braintree_ClientToken::generate();
                
                
            } catch (Exception $ex) {
                echo "<pre>";
                print_r($ex->getMessage());
            }
            
        ?>
    <h1>Braintree Credit Card Transaction Form</h1>
    <script src="https://js.braintreegateway.com/v2/braintree.js"></script>
        <script>
            braintree.setup('<?php echo $clientToken;?>', "dropin", {
                container: "payment-form"
            });
        </script>
        <form id="checkout" method="post" action="payment.php">
            <div id="payment-form"></div>
            <input type="submit" value="Pay $10">
        </form>
  </body>
</html>