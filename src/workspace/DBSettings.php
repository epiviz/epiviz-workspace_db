<?php
/**
 * Created by Florin Chelaru ( florinc [at] umd [dot] edu )
 * Date: 1/29/13
 * Time: 4:13 PM
 */
class DBSettings {
  const dbname = 'epiviz';
  const server = 'localhost';
  const username = 'admin';
  const password = 'epivizpass';

  private static $db = null;

  public static function db() {
    if (DBSettings::$db != null) {
      return DBSettings::$db;
    }

    $server = DBSettings::server;
    $username = DBSettings::username;
    $password = DBSettings::password;
    $dbname = DBSettings::dbname;

    try {
        // Open a persistent database connection, for performance improvement
        DBSettings::$db = new PDO('mysql:host=' . $server . ';dbname=' . $dbname . ';charset=utf8', $username, $password,
            array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_EMULATE_PREPARES => false, // Used to prevent SQL injection
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ));
    } catch (Exception $e) {
        echo 'caughtL ', $e->getMessage(), '\n';
    }
      return DBSettings::$db;
  }
}
