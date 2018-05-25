<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="row">
    <a href="<?php echo SITE_URL; ?>index.php?kontr=Film&akcija=exportCSV" class="btn btn-info">Export CSV</a>
    <a href="<?php echo SITE_URL; ?>index.php?kontr=Film&akcija=exportJSON" class="btn btn-info">Export JSON</a>
</div>
<ul>
    <?php 
    //$data['filmovi'] iz controllera postaje $filmovi zbog extract
    foreach ($filmovi as $film){
        echo '<a href="'.SITE_URL.'index.php?kontr=Film&akcija=show&id='.$film['film_id'].'"><li>'.$film['title'].'</a></li>';
    }
    ?>
</ul>