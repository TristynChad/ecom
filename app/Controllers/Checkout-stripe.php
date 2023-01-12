<?php

require_once APP_DIR . "Utils/code.precheckout.php";

$stripe = Stripeclient::getClient();

header('Content-Type: application/json');

$YOUR_DOMAIN = BASE_URL;

$checkout_session = $stripe->checkout->sessions->create([
    'line_items' => [[
        'price_data' => [
            'currency' => 'USD',
            'unit_amount' => 50 * 100,
            'product_data' => [
                'name' => 'Cart Checkout',
                'description' => "Cart checkout description",
                'images' => ['https://unsplash.com/photos/n9R0MN3XGvY'],
            ]
        ],
        'quantity' => 1,
    ]],
    'payment_method_types' => ['card'],
    'mode' => 'payment',
    'success_url' => $YOUR_DOMAIN . 'checkout/success/stripe/{CHECKOUT_SESSION_ID}',
    'cancel_url' => $YOUR_DOMAIN . 'checkout',
]);


header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);