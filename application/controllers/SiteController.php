<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SiteController extends BaseController{
    function __construct() {
        
    }
    public function index(){
        
        $data=array();
        $this->loadView('site/trazilica',$data);
    }
    public function page($page){
        $data=array();
        $this->loadView('site/'.$page,$data);
    }
    

}