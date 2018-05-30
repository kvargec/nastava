<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<form method="POST" action="<?php echo SITE_URL; ?>index.php?kontr=Customer&akcija=snimi">
    <div class="form-group">
        <label for="first_name">Ime</label>
        <input type="text" class="form-control"  name="first_name" value="<?php echo $customer[0]['first_name'];?>"/>
    </div>
    <div class="form-group">
        <label for="last_name">Prezime</label>
        <input type="text" class="form-control"  name="first_name" value="<?php echo $customer[0]['last_name'];?>"/>
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="text" class="form-control"  name="first_name" value="<?php echo $customer[0]['email'];?>"/>
    </div>
    <div class="form-group">
        <label for="active">
        <?php 
        $odabrano=$customer[0]['active']==1?'checked="checked"':'';
        ?>
        <input type="checkbox"   name="active" <?php echo $odabrano;?> />Aktivan</label>
    </div>
    <p>
        <?php 
        $vrijemePromjene=date("d.m.Y. H:i",  strtotime($customer[0]['last_update']));
        $vrijemeSada=date("d.m.Y. H:i",time());
        echo $vrijemePromjene.', sada je: '.$vrijemeSada; ?>
    </p>
    <input type="hidden" value="<?php echo $customer[0]['customer_id'];?>" name="customer_id" />
    <input type="submit" class="btn btn-danger" value="Spremi" />
</form>
