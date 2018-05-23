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
    public function popisGlumaca($id){
        $film=new Film();
        $popis=$film->getActors($id);
        $temp="<ul>";
        foreach($popis as $glumac){
            $temp.="<li>".$glumac['first_name']." ".$glumac['last_name']."</li>";
        }
        $temp.="</ul>";
        echo $temp;
    }

}
