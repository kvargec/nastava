<?php

class FilmController extends BaseController{
    function __construct() {
        $this->loadModel("Film");
    }
    public function index(){
        $film=new Film();
        $data['filmovi']=$film->getAll();
        $this->loadView('film/index',$data);
    }
    public function show($id){
        $film=new Film();
        $data['film']=$film->getByPk($id);
        $this->loadView('film/show',$data);
    }

}
