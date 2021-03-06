<?php

class Film extends BaseModel{
    function __construct() {
        $this->tableName="film";
        $this->pk="film_id";
        parent::__construct();
    }
    public function getActors($film){
        $upit="SELECT first_name,last_name FROM actor WHERE actor_id IN "
                . "( SELECT actor_id FROM film_actor WHERE film_id=".$film. ")";
        $rezultat=  mysqli_query($this->veza, $upit);
        $izlaz=array();
        while($row=  mysqli_fetch_assoc($rezultat)){
            $izlaz[]=$row;
        }
        return $izlaz;
    }
    public function getFilm($pojam,$tablica){
        if($tablica=='film')
        {
            $upit="SELECT title, film_id FROM film WHERE title LIKE '%".$pojam."%'";
        }else{
            $upit="SELECT first_name,last_name, actor_id FROM actor WHERE first_name LIKE '%".$pojam."%' "
                    . "OR last_name like '%".$pojam."%'";
        }
        $rezultat=  mysqli_query($this->veza, $upit);
        $izlaz=array();
        while($row=  mysqli_fetch_assoc($rezultat)){
            $temp=array();
            $temp['naziv']=($tablica=='film')?$row['title']:$row['first_name'].' '.$row['last_name'];
            $izlaz[]=$temp;
        }
        return $izlaz;
    }
}
