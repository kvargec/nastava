<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<form method="POST" action="<?php echo SITE_URL.'index.php?kontr=Site&akcija=skupno'?>">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Odaberi</th>
      <th scope="col">Ime i prezime</th>
      <th scope="col">Adresa</th>
      <th scope="col">Akcije</th>
    </tr>
  </thead>
  <tbody>
  
    <?php 
    $i=1;
    
    foreach ($customers as $customer){
        $ikona=$customer['active']==1?'<i class="fas fa-ban"></i>':'<i class="far fa-circle"></i>';
        echo '<tr>';
        echo '<td>'.$i.'.</td>';
        echo '<td><input type="checkbox" name="odabrani[]" value="'.$customer['customer_id'].'" /></td>';
        echo '<td><a href="'.SITE_URL.'index.php?kontr=Customer&akcija=show&id='.$customer['customer_id'].'">'.$customer['first_name'].' '.$customer['last_name'].'</a></td>';
        echo '<td><a href="'.SITE_URL.'index.php?kontr=Customer&akcija=updateAddress&id='.$customer['address_id'].'" class="btn btn-warning">'.$customer['address'].'</a></td>';
        echo '<td>'
        . '<a href="'.SITE_URL.'index.php?kontr=Customer&akcija=edit&id='.$customer['customer_id'].'"><i class="fas fa-edit"></i></a>&nbsp;'
        . '<a href="'.SITE_URL.'index.php?kontr=Customer&akcija=show&id='.$customer['customer_id'].'"><i class="far fa-eye"></i></a>&nbsp;'
        . '<a href="'.SITE_URL.'index.php?kontr=Customer&akcija=delete&id='.$customer['customer_id'].'"><i class="fas fa-trash-alt"></i></a>'
        .'<a href="#" onclick="promjena('.$customer['customer_id'].','.$customer['active'].')">'.$ikona.'</a></td>';
        echo '</tr>';
        $i++;
    }
    ?>
       
  </tbody>
</table>
      <input type="submit" class="btn btn-warning" value="Izvezi" />
</form>