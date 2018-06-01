<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<table class="table table-striped">
    <tr>
        <td>Ime</td>
        <td><?php echo $customer[0]['first_name'] ?></td>
    </tr>
    <tr>
        <td>Prezime</td>
        <td><?php echo $customer[0]['last_name'] ?></td>
    </tr>
    <tr>
        <td>E-mail</td>
        <td><?php echo $customer[0]['email'] ?></td>
    </tr>
    <tr>
        <td>Adresa</td>
        <td><?php echo $customer[0]['address'] ?></td>
    </tr>
</table>
<a href="<?php echo SITE_URL; ?>index.php?kontr=Customer&akcija=edit&id=<?php echo $customer[0]['customer_id']; ?>" class="btn btn-warning">Uredi</a>
<a href="<?php echo SITE_URL; ?>index.php?kontr=Customer&akcija=updateAddress&id=<?php echo $customer[0]['customer_id']; ?>" class="btn btn-warning">Uredi adresu</a>
