<?php

class Film extends BaseModel{
    function __construct() {
        $this->tableName="film";
        $this->pk="film_id";
        parent::__construct();
    }

}
