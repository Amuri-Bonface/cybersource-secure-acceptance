<?php

//define('MERCHANT_ID', '<MERCHANT_ID>');
define('PROFILE_ID',  'F7519685-B00F-4554-89FF-0268FB5C29D7');
define('ACCESS_KEY',  'ef4e0fa9082436c0b53d391909f37ca4');
define('SECRET_KEY',  '7701032c2fae447d889c3b081e43f9f7ece7e46c6d9f457798f068fe45440757d2c1f73504544ddaaf2f47173414ad828c82bd56f4a9449ab723306f1764eb0aee39002f4d2d4080801894e26b1cc4f6d711cf0137c740a48b25eabdb22fb449446ba8324d5a4a48bfecf8c5b1cd99b35029ddfc1e1b40f8871145e312774b4a');

// DF TEST: 1snn5n9w, LIVE: k8vif92e 
//define('DF_ORG_ID', 'ecomr005174');

// PAYMENT URL
define('CYBS_BASE_URL', 'https://testsecureacceptance.cybersource.com/silent');

define('PAYMENT_URL', CYBS_BASE_URL . '/pay');
// define('PAYMENT_URL', '/sa-sop/debug.php');

define('TOKEN_CREATE_URL', CYBS_BASE_URL . '/token/create');
define('TOKEN_UPDATE_URL', CYBS_BASE_URL . '/token/update');