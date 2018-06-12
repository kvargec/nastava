<?php

class FilmController extends BaseController{
    function __construct() {
        $this->loadModel("Film");
    }
    public function index(){
        $film=new Film();
        $data['filmovi']=$film->getAll();
         $data['poruka']="Popis filmova";
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
    public function edit($id){
        $film=new Film();
        $data['film']=$film->getByPk($id);
        $data['jezici']=$film->getJezikAll();
        $this->loadView('film/edit',$data);
    }
    public function update(){
        $id=$_POST['film_id'];
        $naziv=$_POST['title'];
        $opis=$_POST['description'];
        $film=new Film();
        $reza=$film->save($id,$naziv,$opis);
        if($reza){
                $data['poruka']="Uspješno ste spremili adresu";
                $this->index();
            }else{
                $data['poruka']=$reza;
                $this->index();
            }
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
    public function exportCSV(){
        $film=new Film();
        $filmovi=$film->getAll();
        $temp="";
        foreach($filmovi as $filmek){
            $temp.=$filmek['title'].";".$filmek['rating'].PHP_EOL;
        }
        $fp=fopen("films.csv","w+");
        fwrite($fp,$temp);
        fclose($fp);
        header('Content-Type: application/csv');
        header('Content-Disposition: attachment; filename=films.csv');
        header('Pragma: no-cache');
        readfile("films.csv");
    }
    public function exportJSON(){
        $film=new Film();
        $filmovi=$film->getAll();
        $temp=array();
        foreach($filmovi as $filmek){
            $temp[$filmek['title']]=$filmek['rating'];
        }
        $fp=fopen("films.json","w+");
        fwrite($fp,json_encode($temp));
        fclose($fp);
        header('Content-Type: application/json');
        header('Content-Disposition: attachment; filename=films.json');
        header('Pragma: no-cache');
        readfile("films.json");
    }

}
