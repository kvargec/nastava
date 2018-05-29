<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Address extends BaseModel{
    function __construct() {
        $this->tableName="address";
        $this->pk="address_id";
        parent::__construct();
    }
    public function set_address($address,$city_id,$postal_code,$phone,$district=null){
        $upit="INSERT INTO `address`(`address`, `address2`, `district`, `city_id`, `postal_code`, `phone`) VALUES ('".$address."',null,'".$district."',".$city_id.",'".$postal_code."','".$phone."')";
        $rezultat=  mysqli_query($this->veza, $upit);
       
        if($rezultat){
            return true;
        }else{
            return (mysqli_error($this->veza) );
        }
    }
    public function get_address($id){
        
    }
    public function get_gradovi(){
        $upit="SELECT city_id,city FROM city";
        $rezultat=  mysqli_query($this->veza, $upit);
        $izlaz=array();
        while($row=  mysqli_fetch_assoc($rezultat)){
            $izlaz[]=$row;
        }
        return $izlaz;
    }

}