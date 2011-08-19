<?php defined('SYSPATH') or die('No direct script access.');

require_once Kohana::find_file('vendor', 'lib/Braintree');

$configuration = Kohana::$config->load('braintree');

Braintree_Configuration::environment($configuration->environment);
Braintree_Configuration::merchantId($configuration->merchantId);
Braintree_Configuration::publicKey($configuration->publicKey);
Braintree_Configuration::privateKey($configuration->privateKey);