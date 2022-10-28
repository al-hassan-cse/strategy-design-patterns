 
<?php

class Database{

    public $driver;
    public $link;

    public function setDriver($driver){
        $this->driver = $driver;
    }

    public function connect($host, $db, $username, $password){
        if($this->driver == 'mysql'){
            $msgmysql = new ManageMysql();
            $msgmysql->setHost($host);
            $msgmysql->setDB($db);
            $msgmysql->setUsername($username);
            $msgmysql->setPassword($password);
            $this->link =  $msgmysql->connect();
        }
        elseif($this->driver == 'sqlite'){
            $msgmysqlite = new ManageSqlite();
            $msgmysqlite->setHost($host);
            $msgmysqlite->setDB($db);
            $msgmysqlite->setUsername($username);
            $msgmysqlite->setPassword($password);
            $this->link =  $msgmysqlite->connect();
        }
    }

}

?>