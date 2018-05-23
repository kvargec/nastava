<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TraziController extends BaseController{
    function __construct() {
        
    }
    public function index(){
        
        $data=array();
        $this->loadView('site/trazilica',$data);
    }
    

}