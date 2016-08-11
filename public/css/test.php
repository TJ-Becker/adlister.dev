<?php
require_once '../adlister.dev/unirest-php/src/Unirest.php';
$response = Unirest\Request::get("https://omgvamp-hearthstone-v1.p.mashape.com/cards",
    array(
        "X-Mashape-Key" => "TAhilZ8ebZmsh1WB67rouO9umbzPp1VILsejsnjRg7ZwoQp5dQ"
    )
);
