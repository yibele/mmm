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
        }catch(PDOException $e){
            exit('mysql connect error'.$e->getMessage());
        }
    }


    public function Query($Sql , $model='many' , $debug = false)
    {
        if($debug)
        {
            exit($Sql);
        }
        $this->job = $this->dbh->query($Sql);

        if($this->job){
            $this->job->setFetchMode(PDO::FETCH_ASSOC);
            if($model =='many'){
                $result = $this->job->fetchAll();
            }elseif($model =='single'){
                $result = $this->job->fetch();
            }
        }else{
            return NULL;
        }
        $this->job = NULL;
        return $result;
    }

    public function Insert($table , $args , $debug = false)
    {
        $this->checkFields($table, $args);
    }
}

