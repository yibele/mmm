<?php

class Mysql{

    private $dsn;
    private $dbh;
    private $job;




    public function Connect($dblib,$dbhost,$dbuser,$dbpw,$dbname,$dbcharset)
    {
        try
        {
            $this->$dsn = $dblib.':host='.$dbhost.';dbname='.$dbname;
        }catch(PDOException $e)
        {
            exit('mysql connect error'.$e->getMessage());
        }
        
    }
}
