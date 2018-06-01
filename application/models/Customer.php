<?php
class Customer extends BaseModel{
    function __construct() {
        $this->tableName="customer";
        $this->pk="customer_id";
        parent::__construct();
    }
    public function set_customer($address,$city_id,$postal_code,$phone,$district=null){
        $upit="INSERT INTO `address`(`address`, `address2`, `district`, `city_id`, `postal_code`, `phone`) VALUES (".$address.",null,".$district.",".$city_id.",".$postal_code.",".$phone.")";
        $rezultat=  mysqli_query($this->veza, $upit);
        if($reza){
            
        }else{
            
        }
    }
    public function get_customer_all(){
        $upit="SELECT c.first_name,c.last_name,c.customer_id,c.email, a.address FROM customer as c"
                . " LEFT JOIN  address as a ON a.address_id=c.address_id";
        $rezultat=  mysqli_query($this->veza, $upit);
     
        $izlaz=array();
        while($row=  mysqli_fetch_assoc($rezultat)){
            $izlaz[]=$row;
        }
        return $izlaz;
    }
    
    public function get_customer($id){
        $upit="SELECT c.first_name,c.last_name,c.customer_id,c.email, a.address FROM customer c"
                . " LEFT JOIN address a ON a.address_id=c.address_id"
                . " WHERE c.customer_id=".$id;
        
        $rezultat=  mysqli_query($this->veza, $upit);
        $izlaz=array();
        while($row=  mysqli_fetch_assoc($rezultat)){
            $izlaz[]=$row;
        }
        return $izlaz;
    }
    public function get_customer_details($id){
        $upit="SELECT * FROM customer c"
                . " WHERE c.customer_id=".$id;
        
        $rezultat=  mysqli_query($this->veza, $upit);
        $izlaz=array();
        while($row=  mysqli_fetch_assoc($rezultat)){
            $izlaz[]=$row;
        }
        return $izlaz;
    }
    public function save($ime,$prezime,$emajl,$odabrano,$id){
        
        $upit="UPDATE `customer` SET `first_name`='$ime', `last_name`='$prezime'"
                . ",`email`='$emajl', `active`=$odabrano "
                . " WHERE customer_id=".$id;
        $rezultat=  mysqli_query($this->veza, $upit);
        if($rezultat){
            return "Sve je uspješno spremljeno";
        }else{
            $temp=mysqli_error($this->veza);
            return "Greška prilikom spremanja: ".$temp.", upit:".$upit;
        }
    }

}