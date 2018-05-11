<?php


class BaseController {
    
    public function loadModel($model){
        require_once __DIR__.'/../application/models/'.$model.'.php';
    }
    public function loadView($view,$data=null){
        extract($data);
        require_once __DIR__.'/../application/views/layout/header.php';
        require_once __DIR__.'/../application/views/'.$view.'.php';
        require_once __DIR__.'/../application/views/layout/footer.php';
    }
}
