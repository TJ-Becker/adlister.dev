<?php

require_once __DIR__ . '/../../models/Deck.php';

$deck = new Deck;
$deck->deck_name = 'Zoo';
$deck->user_id = 1;
$deck->class_id = 8;
$deck->save();
var_dump($deck);

$deck = new Deck;
$deck->deck_name = 'Dragon Warrior';
$deck->user_id = 2;
$deck->class_id = 9;
$deck->save();
var_dump($deck);

$deck = new Deck;
$deck->deck_name = 'N\'Zoth Priest';
$deck->user_id = 3;
$deck->class_id = 5;
$deck->save();
var_dump($deck);

$deck = new Deck;
$deck->deck_name = 'Aggro Shaman';
$deck->user_id = 4;
$deck->class_id = 7;
$deck->save();
var_dump($deck);