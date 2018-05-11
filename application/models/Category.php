<?php

class Category extends BaseModel{
    function __construct() {
        $this->tableName="category";
        $this->pk="category_id";
        parent::__construct();
    }
    public function filmCategory($filmID){
        $upit="SELECT name FROM category WHERE category_id IN "
                . "( SELECT category_id FROM film_category WHERE film_id=".$filmID. ")";
        $rezultat=  mysqli_query($this->veza, $upit);
        $izlaz=array();
        while($row=  mysqli_fetch_assoc($rezultat)){
            $izlaz[]=$row;
        }
        return $izlaz;
    }

}
