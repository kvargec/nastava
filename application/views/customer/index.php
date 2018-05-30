<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ime i prezime</th>
      <th scope="col">Adresa</th>
      <th scope="col">Akcije</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $i=1;
    
    foreach ($customers as $customer){
        echo '<tr>';
        echo '<td>'.$i.'.</td>';
        echo '<td><a href="'.SITE_URL.'index.php?kontr=Customer&akcija=show&id='.$customer['customer_id'].'">'.$customer['first_name'].' '.$customer['last_name'].'</a></td>';
        echo '<td>'.$customer['address'].'</td>';
        echo '<td>&nbsp;</td>';
        echo '</tr>';
        $i++;
    }
    ?>
  </tbody>
</table>