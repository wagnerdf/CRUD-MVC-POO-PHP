<?php

    require_once('./controller/clientsController.php');

    $action = !empty($_GET['a']) ? $_GET['a'] : 'getAll';

    $controller = new clientsController();

    $controller->{$action}();
  



?>