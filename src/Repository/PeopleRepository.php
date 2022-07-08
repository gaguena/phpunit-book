<?php
namespace App\Repository;


use App\Model\People;

class PeopleRepository
{
  private static array $peoples = [];

  public function save(People $people) {
    self::$peoples[] = $people;
  }
  
  public function remove(People $people)
  {
    $key = array_filter(self::$peoples, function ($k) {
      return self::$peoples[$k]->name == $people->name;
    }, ARRAY_FILTER_USE_KEY);
    if (self::$peoples[$key]) {
      unset(self::$peoples[$key]);
    }
  }

  public function find(string $name)
  {
    return array_filter(
      self::$peoples,
      function($people){
        return $people->name === $name;
      });
  }
}

