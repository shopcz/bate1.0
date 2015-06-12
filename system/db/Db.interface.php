<?php

interface Db {
    public static function GetOneInstance($dsn,$user,$pass,$driver_options);
    public function exec($sql);
    public function getRow($sql);
    public function getAll($sql);
    public function getOne($sql);
    public function query($sql);
}
