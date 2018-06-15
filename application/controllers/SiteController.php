<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SiteController extends BaseController{
    function __construct() {
        
    }
    public function page($page){
        $data=array();
        $data['info']=  SiteController::info();
        $this->loadView('site/'.$page,$data);
    }
    public function login(){
        $user=$_POST['username'];
        $zaporka=sha1($_POST['password']);
        if($zaporka==sha1('mama')){
            $_SESSION['user']=$user;
            // logiran sam
           
            $data['poruka']="Uspješno ste logirani";
            $this->loadView('site/login',$data);
        }else{
            $data=array();
            $data['poruka']="Neispravni podaci";
            $this->loadView('site/login',$data);
        }
        
        
    }
    public function logout(){
        session_destroy();
        $_SESSION=null;
        $data=array();
        $this->loadView('site/login',$data);
    }
    public function skupno(){
        $this->loadModel('Customer');
        if(isset($_POST['odabrani'])){
            $odabrano=$_POST['odabrani'];
            $kupac=new Customer();
            $temp=array();
            foreach($odabrano as $odabir){
                    $kk=$kupac->get_customer($odabir);
                    $kk=$kk[0];
                    $sifra=  sha1($kk['email']);
                    $temp[$kk['customer_id']]=$kk['first_name'].' '.$kk['last_name'].','.$sifra;
                }
        
        }
        
        $fp=fopen("export.json","w+");
        fwrite($fp,json_encode($temp));
        fclose($fp);
        header('Content-Type: application/json');
        header('Content-Disposition: attachment; filename=export.json');
        header('Pragma: no-cache');
        readfile("export.json");
        
    }
    public static function info(){
        $temp='<pre>';
        $temp.=$_SERVER['SERVER_NAME'];
        $temp.='</pre>';
        return $temp;
    }
    public function ajax(){
        $kaj=$_POST['podatak'];
        echo 'Poslano je: '.$kaj;
    }
}