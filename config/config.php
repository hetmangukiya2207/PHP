<?php

class Config{
    public $HOSTNAME = "127.0.0.1";
    public $USERNAME = "root";
    public $PASSWORD = "";
    public $DB_NAME = "student";

    public function connect(){
        $res = mysqli_connect($this->HOSTNAME,$this->USERNAME,$this->PASSWORD,$this->DB_NAME);
        return $res;
    }
}

?>