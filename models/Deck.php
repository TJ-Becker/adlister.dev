<?php

require_once __DIR__ . '/Model.php';

class Deck extends Model {

    protected static $table = 'decks';
    protected static $otherTable = 'cards';
    // checks if the attribute being saved is password and hashes it if so
    public function __set($name, $value)
    {

        if ($name == 'password')
        {
            $value = password_hash($value, PASSWORD_DEFAULT);
        }

        parent::__set($name, $value);
    }

    // finds and returns instance of user based on email or username
    public static function findDeckByNameOrId($deck_name_or_deck_id)
    {

        self::dbConnect();

        $query = 'SELECT * FROM ' . self::$table . ' WHERE deck_name = :deck_name_or_id OR id = :deck_name_or_id';
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':deck_name_or_deck_id', $deck_name_or_deck_id, PDO::PARAM_STR);
        $stmt->bindValue(':deck_name_or_deck_id', $deck_name_or_deck_id, PDO::PARAM_STR);
        $stmt->execute();
        //Store the resultset in a variable named $result
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
        // The following code will set the attributes on the calling object based on the result variable's contents
        $instance = null;
        if ( $results )
        {
            $instance = new static;
            $instance->attributes = $results;
        }
        return $instance;
    }

    protected function createDeck($deck_name){
        self::dbConnect();
        if(sizeof($attributes->deckArray) == 30){
            $query = 'INSERT INTO decks (deck_name, user_id) VALUES(:deck_name, :user_id)';
            $stmt = self::$dbc->prepare($query);
            $stmt->bindValue(':deck_name', $deck_name, PDO::PARAM_STR);
            $stmt->bindValue(':deck_name_or_deck_id', $this->user_id, PDO::PARAM_STR);
            $stmt->execute();
        }
    }

    protected function updateDeck(){
        self::dbConnect();
        if(sizeof($attributes->deckArray) == 30){
            $query = 'UPDATE decks set blank = :blank, blank = :blank WHERE deck_id = :deck_id ';
        }
    }
    protected function deleteDeck(){

    }



}

?>















