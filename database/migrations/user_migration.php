<?php

$_ENV = include __DIR__ . '/.env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS users');

$query = 'CREATE TABLE users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    NAME VARCHAR(240) NOT NULL,
    email VARCHAR(240) NOT NULL,
    username VARCHAR(100) NOT NULL,
    PASSWORD VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);

$dbc->exec('DROP TABLE IF EXISTS decks');

$query = 'CREATE TABLE decks (
    id INT UNSIGNED NOT NULL,
    deck_name VARCHAR(240) NOT NULL,
    user_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES users (id)
)';

$dbc->exec($query);

$dbc->exec('DROP TABLE IF EXISTS cards');

$query = 'CREATE TABLE cards (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    card_id INT UNSIGNED NOT NULL,
    NAME VARCHAR(240) NOT NULL,
    deck_id INT UNSIGNED NOT NULL,
    FOREIGN KEY (deck_id) REFERENCES decks (id),
    PRIMARY KEY (id)
)';

$dbc->exec($query);




