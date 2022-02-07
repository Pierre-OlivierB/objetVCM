<?php class Database { 
     
    public static $cont = null; 


    private function startConnection() 
    { 
        if ( null == self::$cont ) { 
            try { 
                $dbHost = 'localhost' ;
                $dbName = 'testphp' ;
                $dbUsername = 'root';
                $dbUserPassword = ''; 

                self::$cont = new PDO( "mysql:host=".$dbHost.";"."dbname=".$dbName,$dbUsername,$dbUserPassword);
                return self::$cont; 
            } catch(PDOException $e) { 
                die($e->getMessage()); 
        }
       }
       
    }

    public function getConnection()
    {
        if(self::$cont==null){
            $this->startConnection();
        }
        return self::$cont;
    }
     
    public function disconnect()
    {
       return self::$cont = null;
    }
}
