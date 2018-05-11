<?php 
require_once 'config/config.php';
require_once 'system/BaseModel.php';
require_once 'system/BaseController.php';
// učitati neki kontrokler i prikazati stranicu
// kontroler->model->kontroler->view
if(isset($_GET['kontr'])){
    $koji=$_GET['kontr'];
    require_once 'application/controllers/'.$koji.'Controller.php';
    $zaPoziv=$koji.'Controller';
    $prikaz=new $zaPoziv();
    if(isset($_GET['akcija'])){
        $dodatno=isset($_GET['id'])?$_GET['id']:null;
        $akcija=$_GET['akcija'];
        $prikaz->$akcija($dodatno);
    }else{
        $prikaz->index();
    }
    
}else{
    require_once 'application/controllers/FilmController.php';
    $prikaz=new FilmController();
    $prikaz->index();
}

?>