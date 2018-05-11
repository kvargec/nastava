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
        $this->loadModel("Category");
        $data['film']=$film->getByPk($id);
        $kat=new Category();
        $data['kategorije']=$kat->filmCategory($id);
        $this->loadView('film/show',$data);
    }

}
