<?php
require_once __DIR__ . '/../vendor/autoload.php';

function result($data)
{
  header('Content-type: application/json');
  echo json_encode($data);
}