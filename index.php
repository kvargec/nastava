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
    $prikaz->index();
}else{
    require_once 'application/controllers/FilmController.php';
    $prikaz=new FilmController();
    $prikaz->index();
}

?>