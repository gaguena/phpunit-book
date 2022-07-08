<?php
require_once '../../src/AppStart.php';

require_once '../../src/Controller/PeopleController.php';

use App\Controller\PeopleController;
use App\Model\People;

$controller = new PeopleController();

parse_str(file_get_contents("php://input"),$request);

var_dump($request);

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    {
      $res = $controller->get($_GET);
      echo result($res);
      break;
    }
  case 'POST':
    {
      $res = $controller->create($_POST);
      echo result($res);
      break;
    }
  case 'PUT':
    {
      $res = $controller->create($_);
      echo result($res);
      break;
    }
  case 'DELETE':
    $res = $controller->create($_POST);
    echo result($res);
    break;
}
