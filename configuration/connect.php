<!-- conexão com banco de dados -->

<?php

    define('host', 'localhost');
    define('databasename', 'db_pdo_mvc');
    define('user', 'root');
    define('password', ''); // no xampp por padrao e vazia

    class Connect
    {
        protected $connection;

        function __construct()
        {
            $this->connectDataBase();
        }

        function connectDataBase()
        {
            try
            {
                $this->connection = new PDO('mysql:host=' . host . ';dbname=' . databasename, user, password);
            }
            catch(PDOException $e)
            {
                echo "Erro!" . $e->getMessage();
                die();
            }
        }
    }

    $testConnection = new Connect();

?>