<?php

class BaseModel {
    var $veza;
    var $tableName;
    var $pk;
    public function __construct() {
        $zaBazu=array();
        $zaBazu['server']="localhost";
        $zaBazu['port']="3306";
        $zaBazu['user']="root";
        $zaBazu['password']="";
        $zaBazu['naziv']="sakila";
        $this->veza=  mysqli_connect($zaBazu['server'], $zaBazu['user'], $zaBazu['password'], $zaBazu['naziv'], $zaBazu['port']);
        if(!$this->veza){
           return false;
        }else{

        }
    }
    public function getAll(){
        $upit="SELECT * FROM ".$this->tableName;
        $rezultat=  mysqli_query($this->veza, $upit);
        $izlaz=array();
        while($row=  mysqli_fetch_assoc($rezultat)){
            $izlaz[]=$row;
        }
        return $izlaz;
    }
    public function getByPk($id){
        $upit="SELECT * FROM ".$this->tableName." WHERE ".$this->pk.'='.$id;
        $rezultat=  mysqli_query($this->veza, $upit);
        $izlaz=array();
        while($row=  mysqli_fetch_assoc($rezultat)){
            $izlaz[]=$row;
        }
        return $izlaz;
    }
}
