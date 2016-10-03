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

        $query = 'INSERT INTO  users (first_name, last_name, username, password, email) VALUES (:first_name, :last_name, :username, :password, :email)';
        $stmt = self::$dbc->prepare($query);


        foreach ($this->attributes as $key => $value) {
            $this->attributes[$key] = trim(htmlspecialchars(strip_tags($this->attributes[$key])));
        }

        $stmt->bindValue(':first_name', $this->attributes['first_name'], PDO::PARAM_STR);
        $stmt->bindValue(':last_name', $this->attributes['last_name'], PDO::PARAM_STR);
        $stmt->bindValue(':username', $this->attributes['username'], PDO::PARAM_STR);
        $stmt->bindValue(':password', $this->attributes['password'], PDO::PARAM_STR);
        $stmt->bindValue(':email', $this->attributes['email'], PDO::PARAM_STR);

        $stmt->execute();


        //AS A LOOP
        // foreach ($this->attributes as $column => $value) {
        //     $stmt->bindValue(':'.$column,$value, PDO::PARAM_STR);
        }

        $this->attributes['id'] = self::$dbc->lastInsertId();
    }

    /** Update existing entry in the database */
    protected function update()
    {
// @TODO: Use prepared statements to ensure data security

        $query = 'UPDATE users SET first_name = :first_name, last_name = :last_name, username = :username, password = :password, email = :email WHERE id = :id';

        $stmt = self::$dbc->prepare($query);

// @TODO: You will need to iterate through all the attributes to build the prepared query

        foreach ($this->attributes as $key => $value) {
            $this->attributes[$key] = trim(htmlspecialchars(strip_tags($this->attributes[$key])));
        }
//do I need to bind ID?
        $stmt->bindValue(':id', $this->attributes['id'], PDO::PARAM_INT);
        $stmt->bindValue(':first_name', $this->attributes['first_name'], PDO::PARAM_STR);
        $stmt->bindValue(':last_name', $this->attributes['last_name'], PDO::PARAM_STR);
        $stmt->bindValue(':username', $this->attributes['username'], PDO::PARAM_STR);
        $stmt->bindValue(':password', $this->attributes['password'], PDO::PARAM_STR);
        $stmt->bindValue(':email', $this->attributes['email'], PDO::PARAM_STR);

        $stmt->execute();
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
        $query = 'SELECT * FROM users WHERE id = :id';
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':id',$id, PDO::PARAM_INT);
        $stmt->execute();

// @TODO: Store the result in a variable named $result
        
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        // // The following code will set the attributes on the calling object based on the result variable's contents
        $instance = null;
        if ($result) {
            $instance = new static($result);  //it's like saying...new User($result)
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

        $query = 'SELECT * FROM users';
        $stmt = self::$dbc->exec($query);

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
        $instance = null;
        if ($results) {
            $instance = new static($results);  //it's like saying...new User($result)
        }
        return $instance;

    public function delete()
    {
        $query = 'DELETE FROM users WHERE id = :id';
        $stmt = self::dbc->prepare($query);

        $stmt->bindValue(':id', $this->attributes['id', PDO::PARAM_INT]);
        $stmt->execute();
    }





}
