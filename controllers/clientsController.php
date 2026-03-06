<?php

require_once(__DIR__ . '/../models/Client.php');

Class ClientsController
{
    private $model;

    function __construct()
    {
        $this->model = new ClientModel();
    }

    function getAll()
    {
        $resultData = $this->model->getAll();
        print_r($resultData);
    }
}

?>