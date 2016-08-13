<?php

require_once __DIR__ . '/Model.php';

class Deck extends Model {

    protected static $table = 'decks';
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
    public static function findDeckByNameOrId($deckname_or_class)
    {

        self::dbConnect();

        $query = 'SELECT * FROM ' . self::$table . ' WHERE deck_name = :deckname_or_class OR class = :deckname_or_class';
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':deckname_or_class,', $deckname_or_class, PDO::PARAM_STR);
        $stmt->bindValue(':deckname_or_class,', $deckname_or_class, PDO::PARAM_STR);
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




}

?>















