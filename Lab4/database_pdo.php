<?php

/*
 * Re-create the same database operations that you can find in the 'database_1.php' file,
 * but by using the PDO classes.
 * http://php.net/manual/en/book.pdo.php
 */

$type = $db[$server]["type"];
$host = $db[$server]["host"];
$username = $db[$server]["username"];
$pwd = $db[$server]["pwd"];
$dbname = $db[$server]["db"];
$dsn = "$type:host=$host;dbname=$dbname";
$sql = "SET NAMES utf8";
try {
    $pdo = new PDO($dsn, $username, $pwd);
    $result = $pdo->prepare($sql);
    $result->execute();
    //echo "pdo连接mysql成功!";
} catch (PDOException $e) {
    echo "ERROR !!";
    echo "<pre>";
    print_r($e);
    echo "</pre>";
}

function getConnection()
{
    if (!isset($link)) {
        static $link = NULL;
    }

    if ($link === NULL) {
        $link = mysqli_connect('localhost', 'lightmvcuser', 'testpass', 'lightmvctestdb');
    }
    return $link;
}

function closeConnection()
{
    if (!isset($link)) {
        static $link = NULL;
        return FALSE;
    } else {
        mysqli_close($link);
        return TRUE;
    }
}

function getQuote()
{
    return "'";
}

// SELECT `id`,`firstname`,`lastname` FROM `customers` WHERE x=y
// $where = [key = column name, value = data]
// $andOr = AND | OR
function getCustomers(array $where = array(), $andOr = 'AND')
{
    $query = 'SELECT `id`,`firstname`,`lastname` FROM `customers`';
    if ($where) {
        $query .= ' WHERE ';
        foreach ($where as $column => $value) {
            $query .= $column . ' = ' . getQuote() . $value . getQuote() . ' ' . $andOr;
        }
        $query = substr($query, 0, -(strlen($andOr)));
    }
    $link = getConnection();
    $result = mysqli_query($link, $query);
    return mysqli_fetch_all($result);
}

$myArray = getCustomers(array('id' => '3'));

closeConnection();

$htmlOut = "<!DOCTYPE html>\n<html>\n<head>\n</head>\n<body>\n<table>\n";

foreach ($myArray as $tableRow) {
    $htmlOut .= "\t<tr>\n";
    foreach ($tableRow as $tableCol) {
        $htmlOut .= "\t\t<td align=\"center\">$tableCol</td>\n";
    }
    $htmlOut .= "\t</tr>\n";
}

$htmlOut .= "</table>\n</body>\n</html>";

echo $htmlOut;


