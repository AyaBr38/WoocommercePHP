<?php

require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http://localhost/wordpress/', 
    'ck_e24518c21864a3cbd1e4cad7808d3cadd27c7a56', 
    'cs_d99cdf6ddd0c3be06848c630ae1b5c17ac81f860',
    [
        'wp_api' => true, 'version' => 'wc/v3',
    ]
);

?>