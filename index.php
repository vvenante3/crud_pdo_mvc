<!-- rotas & métodos -->

<?php

    require_once('./controllers/clientsController.php');

    // ternário
    $action = !empty($_GET['a'] ? $_GET['a'] : 'getAll'); // O que eu eu vou querer fazer nos Controllers: create, read, update, delete?

    $controller = new clientsController();
    $controller->{$action}(); // chamando o controller 'action'

?>