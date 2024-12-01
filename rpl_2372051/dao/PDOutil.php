<?php

class PDOUtil {
  public static function createMySQLConnection() {
    $link = new PDO("mysql:host=localhost;port=3306", 'root', "");
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $link->setAttribute(PDO::ATTR_AUTOCOMMIT, false);
    return $link;
  }
}