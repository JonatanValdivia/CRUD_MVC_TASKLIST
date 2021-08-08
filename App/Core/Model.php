<?php
namespace App\Core;
class Model{
  private static $connection;

  public static function getCon(){
    if(!isset(self::$connection)){
      self::$connection = new \PDO('mysql:host=localhost;port=3306;dbname=newTaskList;', 'root', 'bcd127');
    }
    return self::$connection;
  }
}