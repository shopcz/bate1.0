<?php
class Pdo_Mysql implements Db{
// class Pdo_Mysql {
    private $dsn;
    private $user;
    private $pass;
    private $driver_options;
    private $link;
    private static $instance;

    
    public static function GetOneInstance($dsn,$user,$pass,$driver_options)
    {
        if(!self::$instance instanceof self)
        {
            self::$instance = new self($dsn,$user,$pass,$driver_options);
        }
        
        return self::$instance;
    }
    
    private function __clone(){}
    
    private function __construct($dsn,$user,$pass,$driver_options)
    {
        $this->dsn = $dsn;
        $this->user = $user;
        $this->pass = $pass;
        $this->driver_options = $driver_options;
        $this->connect();
    }
    
    private function connect()
    {
        try{
        @$this->link = new PDO($this->dsn,$this->user,$this->pass,$this->driver_options);
        }
        catch(PDOException $e)
        {
            die("数据库连接失败:".iconv("GB2312", "utf-8", $e->getMessage())."错误代码：".$e->getCode());
        }
    }
    function exec($sql)
    {
        $result = $this->link->exec($sql);
        $temp = "[".date("Y-m-d H:i:s")."] ".$sql.PHP_EOL;
        file_put_contents('./error.log',$temp,FILE_APPEND);
        if($result == false)
        {
            echo "<br/>语句执行失败，请参考：";
            echo "<pre>";
            var_dump($this->link->errorInfo());
            echo "</pre>";
            echo "<br/>错误代码：" . $this->link->errorCode();
            echo "<br/>失败的语句：" . $sql."<br/>";
            return false;
        }else
            {
                return $result;
            }
        return $result;
    }
    
    function getRow($sql)
    {
        $result = $this->query($sql);
        return $result->fetch(PDO::FETCH_ASSOC);
    }
    
    function getAll($sql)
    {
        $result = $this->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    
    function getOne($sql)
    {
        $result = $this->query($sql);
        return $result->fetchColumn();
    }
    
    function query($sql)
    {
        $result = $this->link->query($sql);

        if($result === false){
           
            echo "<br/>语句执行失败，请参考：".$result->errorInfo();
            echo "<br/>错误代码：" . $result->errorCode();
            echo "<br/>失败的语句：" . $sql;
            return false;
        }else{
            return $result;
        }
    }

    function getInsertId()
    {
        return $this->link->lastInsertId();
    }
    
    /**
     * 数据转义 
     * @param $data
     * @return string 转义完成的数据，并使用银行包裹
     */
     public function escapeString($data)
     {
         return $this->link->quote($data);
     }
}
