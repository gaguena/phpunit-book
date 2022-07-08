<?php
require_once '../../src/AppStart.php';

require_once '../../src/Controller/PeopleController.php';

use App\Controller\PeopleController;
use App\Model\People;

$controller = new PeopleController();

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    {
      if ($_GET['delete'] == 'yes') {
        $res = $controller->remove($_GET['code']);
        echo result($res);
        break;
      }
      $res = $controller->get($_GET['code']);
      echo result($res);
      break;
    }
  case 'POST':
    {
      $res = $controller->create($_POST);
      echo result($res);
      break;
    }
}
