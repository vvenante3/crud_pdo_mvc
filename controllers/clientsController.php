<?php

require_once('./models');

Class ClientsController
{
    private $model;

    function __construc()
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