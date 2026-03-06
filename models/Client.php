<!-- consultas & regras de negócio -->

<?php

require_once('./configuration/connect.php');

    class ClientModel extends Connect
    {
        private $table;

        function __construc()
        {
            parent::__construct(); // vai "invocar" o __construc de connect.php -> abrir conexão com Db
            $this->table = 'clients';
        }

        function getAll()
        {
            // query
            $sqlSelect = $this->connection->query("SELECT * FROM $this->table");
            $resultQuery = $sqlSelect->fetchAll();
            return $resultQuery;

        }


    }



?>