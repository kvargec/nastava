<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$info=$actor[0];
?>
<div class="card">
  <div class="card-header">
    <?php echo $info['first_name'].' '.$info['last_name'] ?>
  </div>
  <div class="card-body">
   
    <p class="card-text">Popis filmova</p>
    <ul>
    <?php 
    //$data['filmovi'] iz controllera postaje $filmovi zbog extract
    foreach ($filmovi as $film){
        echo '<a href="'.SITE_URL.'index.php?kontr=Film&akcija=show&id='.$film['film_id'].'"><li>'.$film['title'].'</a></li>';
    }
    ?>
    </ul>
  </div>
</div>
