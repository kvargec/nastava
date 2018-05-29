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
    foreach ($customers as $customer){
        echo '<li><a href="'.SITE_URL.'index.php?kontr=Customer&akcija=show&id='.$customer['customer_id'].'">'.$customer['first_name'].' '.$customer['last_name'].'</a></li>';
    }
    ?>
</ul>