<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$info=$film[0];
?>
<div class="card">
  <div class="card-header">
    <?php echo $info['title'] ?>
  </div>
  <div class="card-body">
    <h5 class="card-title"><?php echo $info['rating'] ?></h5>
    <p class="card-text"><?php echo $info['description'] ?></p>
    <a href="#" class="btn btn-primary"><?php echo $info['rental_rate'] ?></a>
  </div>
</div>
