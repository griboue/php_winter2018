<?php

/*
 * Re-create the same database operations that you can find in the 'database_1.php' file,
 * but by using the PDO classes.
 * http://php.net/manual/en/book.pdo.php
 */

class database_pdo
{
    private $db = null;
    private static $instance = null;

    private $user = "lightmvcuser";
    private $pass = "testpass";


    private function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=lightmvctestdb ', $this->user, $this->pass);
    }

    //singleton
    public static function getInstance()
    {
        if(is_null(self::$instance))
        {
            self::$instance = new database_pdo();
        }
        return self::$instance;
    }

    public static function closeInstance()
    {
        self::$instance = null;
    }

    public function getQuote()
    {
        return "'";
    }

    public function getCustomers(array $where = array(), $andOr = 'AND')
    {
      /*  $query = self::getInstance()->prepare('SELECT name, colour, calories FROM fruit
        WHERE calories < :calories AND colour = :colour');
        $query->bindParam(':calories', $calories);
        $query->bindParam(':colour', $colour);*/

        $query = 'SELECT `id`,`firstname`,`lastname` FROM `customers`';
        if ($where) {
            $query .= ' WHERE ';
            foreach ($where as $column => $value) {
                $query .= $column . ' = ' . getQuote() . $value . getQuote() . ' ' . $andOr;
            }
            $query = substr($query, 0, -(strlen($andOr)));
        }

        $query = self::getInstance()->prepare($query);
        $query->execute();

        return $query->fetchAll();
    }
}


