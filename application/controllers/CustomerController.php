<?php

class CustomerController extends BaseController{
    function __construct() {
        $this->loadModel("Customer");
        $this->loadModel("Address");
    }
    public function index(){
        $customer=new Customer();
        $data['customers']=$customer->get_customer_all();
        $this->loadView('customer/index',$data);
    }
    public function show($id){
        $customer=new Customer();
        $data['customer']=$customer->get_customer($id);
        $this->loadView('customer/show',$data);
    }
    public function edit($id){
        $customer=new Customer();
        $data['customer']=$customer->get_customer_details($id);
        $this->loadView('customer/edit',$data);
    }
    public function editaddress(){
        $data=array();
        $adresa=new Address();
        $data['gradovi']=$adresa->get_gradovi();
        $this->loadView('customer/address',$data);
    }
    public function snimiadresu(){
        if(isset($_POST)){
            $adresa=new Address();
            $kraj=$adresa->set_address($_POST['address'], $_POST['city_id'], $_POST['postal_code'], $_POST['phone'], $_POST['district']);
            if($kraj){
                $data['poruka']="Uspješno ste spremili adresu";
                $this->loadView('customer/zahvala', $data);
            }else{
                $data['poruka']=$kraj;
                $this->loadView('customer/address', $data);
            }
        }
    }
    public function snimi(){
        var_dump($_POST);
    }
}