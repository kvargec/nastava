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
        echo '<li>'.$actor['first_name'].' '.$actor['last_name'].'</li>';
    }
    ?>
</ul>