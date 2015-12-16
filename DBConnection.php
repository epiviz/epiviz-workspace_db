<?php
/**
 * Created by Florin Chelaru ( florinc [at] umd [dot] edu )
 * Date: 1/29/13
 * Time: 4:13 PM
 */

class DBConnection {
  private static $db = null;

  public static function db() {
    if (DBConnection::$db != null) {
      return DBConnection::$db;
    }

    $server = DB_HOST;
    $username = DB_USER;
    $password = DB_PASSWD;
    $dbname = DB_NAME;

    try {
        // Open a persistent database connection, for performance improvement
        DBConnection::$db = new PDO('mysql:host=' . $server . ';dbname=' . $dbname . ';charset=utf8', $username, $password,
            array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_EMULATE_PREPARES => false, // Used to prevent SQL injection
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ));
    } catch (Exception $e) {
        echo 'caughtL ', $e->getMessage(), '\n';
    }
      return DBConnection::$db;
  }
}
