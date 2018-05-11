<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<ul>
    <?php 
    //$data['filmovi'] iz controllera postaje $filmovi zbog extract
    foreach ($actors as $actor){
        echo '<li><a href="'.SITE_URL.'index.php?kontr=Actor&akcija=show&id='.$actor['actor_id'].'">'.$actor['first_name'].' '.$actor['last_name'].'</a></li>';
    }
    ?>
</ul>