<?php
    /*
        PDO Database Class
        Connect to database
        Create prepared statements
        Bind values
        Return row and results
    */
    class Database {
        private $host = DB_HOST;
        private $user = DB_USER;
        private $pass = DB_PASS;
        private $dbName = DB_NAME;

        private $dbHandler;
        private $statement;
        private $error;

        public function __construct () {
            // Set DSN

            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbName;
            $options = [
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];

            // Create new PDO instance
            try {
                $this->dbHandler = new PDO($dsn, $this->user, $this->pass, $options);
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }

        // Prepare statement with query 
        public function query ($sql) {
            $this->statement = $this->dbHandler->prepare($sql);
        }

        // Bind values
        public function bind ($param, $value, $type = null) {
            if (is_null($type)) {
                switch(true) {
                    case is_int($value):
                        $type = PDO::PARAM_INT;
                    case is_string($value):
                        $type = PDO::PARAM_STR;
                    case is_bool($value):
                        $type = PDO::PARAM_BOOL;
                }
            }

            $this->statement->bindValue($param, $value, $type);
        }

        // Execute the prepared statement
        public function execute () {
            $this->statement->execute();
        }

        // Get result set as array of objects
        public function resultSet () {
            $this->execute();
            return $this->statement->fetchAll(PDO::FETCH_OBJ);
        }

        public function single () {
            $this->execute();
            return $this->statement->fetch(PDO::FETCH_OBJ);
        }

        // Get row count
        public function rowCount () {
            return $this->statement->rowCount();
        }
    }