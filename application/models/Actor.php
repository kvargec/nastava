<?php

class Actor extends BaseModel{
    function __construct() {
        $this->tableName="actor";
        $this->pk="actor_id";
        parent::__construct();
    }
    public function getFilms($actor){
        $upit="SELECT title,film_id FROM film WHERE film_id IN "
                . "( SELECT film_id FROM film_actor WHERE actor_id=".$actor. ")";
        $rezultat=  mysqli_query($this->veza, $upit);
        $izlaz=array();
        while($row=  mysqli_fetch_assoc($rezultat)){
            $izlaz[]=$row;
        }
        return $izlaz;
    }

}
