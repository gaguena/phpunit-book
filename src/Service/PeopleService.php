<?php

namespace App\Service;

use App\Model\People;

class PeopleService
{

  public function get($code)
  {
    $people = new People();
    $people->code = $code;
    $people->name = "Gabriel Aguena";
    return $people;
  }
}

