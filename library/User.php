<?php

// __DIR__ is a *magic constant* with the directory path containing this file.
// This allows us to correctly require_once Model.php, no matter where this file is being required from.
require_once __DIR__ . '/Model.php';

class User extends Model
{
    /** Insert a new entry into the database */
    protected function insert()
    {
        // @TODO: Use prepared statements to ensure data security
        $insert = 
            "INSERT INTO user (username, password, email)
            VALUES (:username, :password, :email)";
        $stmt = $dbc->prepare($insert);

        // @TODO: You will need to iterate through all the attributes to build the prepared query
        foreach ($this->attributes as $key => $value){
            echo $key . PHP_EOL . '\':' . $key . '\'' . PHP_EOL;
            $stmt->bindValue(':' . $key, $value, PDO::PARAM_STR);
        }
        // following code also works but doesnt follow the instructions:
        // $user = ['username' => $username, 'password' => $password, 'email' => $email]
        // return $user;

        // @TODO: After the insert, add the id back to the attributes array
        //        so the object properly represents a DB record
    }

    /** Update existing entry in the database */
    protected function update()
    {
        // @TODO: Use prepared statements to ensure data security
        $update = 
            "UPDATE user (username, password, email)
            VALUES (:username, :password, :email)";

        // @TODO: You will need to iterate through all the attributes to build the prepared query
            foreach ($this->attributes as $key => $value){
            echo $key . PHP_EOL . '\':' . $key . '\'' . PHP_EOL;
            $stmt->bindValue(':' . $key, $value, PDO::PARAM_STR);
            }
    }

    /**
     * Find a single record in the DB based on its id
     *
     * @param int $id id of the user entry in the database
     *
     * @return User An instance of the User class with attributes array set to values from the database
     */
    public static function find($id)
    {
        // Get connection to the database
        self::dbConnect();

        // @TODO: Create select statement using prepared statements

        // @TODO: Store the result in a variable named $result


        // The following code will set the attributes on the calling object based on the result variable's contents
        $instance = null;
        if ($result) {
            $instance = new static($result);
        }
        return $instance;
    }

    /**
     * Find all records in a table
     *
     * @return User[] Array of instances of the User class with attributes set to values from database
     */
    public static function all()
    {
        self::dbConnect();

        // @TODO: Learning from the find method, return all the matching records
    }
}
