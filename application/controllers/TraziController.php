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
    public function pretraga(){
        $kojiPojam=$_POST['pojam'];
        $tablica=$_POST['tablica'];
        $this->loadModel("Film");
        $film=new Film();
        $reza=$film->getFilm($kojiPojam,$tablica);
        $temp="<ol>";
        foreach($reza as $ff){
            $temp.="<li>".$ff['naziv']."</li>";
        }
        $temp.="</ol>";
        echo $temp;
    }
    

}