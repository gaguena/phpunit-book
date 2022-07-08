<?php
namespace App\Controller;

use App\Service\PeopleService;

class PeopleController
{
  
  private PeopleService $peopleService;
  
  public function __construct()
  {
    $this->peopleService = new PeopleService();
  }
  
  public function get($code)
  {
    return $this->peopleService->get($code);
  }
  
  public function remove($code)
  {
    return $this->peopleService->remove($code);
  }
  
  public function create($request)
  {
    return $this->peopleService->create($people);
  }
}

