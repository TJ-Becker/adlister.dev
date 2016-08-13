<?php

require_once __DIR__ . '/Model.php';

class Card extends Model {

    protected static $table = 'cards';
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
    public static function findByCardNameOrCardId($cardname_or_cardid)
    {

    	self::dbConnect();

    	$query = 'SELECT * FROM ' . self::$table . ' WHERE name = :cardname_or_cardid OR card_id = :cardname_or_cardid';

    	$stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':cardname_or_cardid', $cardname_or_cardid, PDO::PARAM_STR);
        $stmt->bindValue(':cardname_or_cardid', $cardname_or_cardid, PDO::PARAM_STR);
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