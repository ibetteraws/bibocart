<?php
 
$api_url_v2 = "http://magento.local/api/v2_soap/?wsdl=1";
 
$username = 'soapuser';
$password = 'ibetter123';
 
$cli = new SoapClient($api_url_v2);
 
//retreive session id from login
$session_id = $cli->login($username, $password);
 
//call customer.list method
$result = $cli->customerCustomerList($session_id);