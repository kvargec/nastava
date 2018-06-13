<?php

class Language extends BaseModel{
    var $jezik;
    var $jezik_id;
    function __construct() {
        $this->tableName="language";
        $this->pk="language_id";
        parent::__construct();
    }
    public function getJezik() {
        return $this->jezik;
    }

    public function getJezik_id() {
        return $this->jezik_id;
    }

    public function setJezik($jezik) {
        $this->jezik = $jezik;
    }

    public function setJezik_id($jezik_id) {
        $this->jezik_id = $jezik_id;
    }
    public function getJezici(){
        $upit="SELECT * FROM language";
        $rezultat=  mysqli_query($this->veza, $upit);
     
        $izlaz=array();
        while($row=  mysqli_fetch_assoc($rezultat)){
            $izlaz[]=$row;
        }
        return $izlaz;
    }
    public function updateJezik($id,$jezik){
        $upit="UPDATE";
    }
    public function insertJezik($jezik){
        $upit="INSERT";
    }

    
}
