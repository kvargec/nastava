<?php

class ActorController extends BaseController{
    function __construct() {
        $this->loadModel("Actor");
    }
    public function index(){
        $actor=new Actor();
        $data['actors']=$actor->getAll();
        $this->loadView('actor/index',$data);
    }
    public function show($id){
        $actor=new Actor();
        $data['actor']=$actor->getByPk($id);
        $this->loadView('actor/show',$data);
    }

}