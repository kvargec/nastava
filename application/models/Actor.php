<?php

class Actor extends BaseModel{
    function __construct() {
        $this->tableName="actor";
        $this->pk="actor_id";
        parent::__construct();
    }

}
