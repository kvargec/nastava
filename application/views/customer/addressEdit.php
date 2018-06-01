<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$adresa=$adresa[0];
?>
<h3><?php 
if(isset($poruka)){
    echo $poruka;
}
 ?></h3>
<form method="POST" action="<?php echo SITE_URL; ?>index.php?kontr=Customer&akcija=updateadresu">
    <div class="form-group">
        <label for="address">Unesite adresu</label>
        <input type="text" class="form-control"  name="address" value="<?php echo $adresa['address']; ?>" />
    </div>
    <div class="form-group">
        <label for="district">Unesite regiju</label>
        <input type="text" class="form-control"  name="district" value="<?php echo $adresa['district']; ?>" />
    </div>
    <div class="form-group">
        <label for="city">Odaberite grad</label>
        <select class="form-control"  name="city_id" >
            <?php 
                foreach($gradovi as $grad){
                    $selektirano= $adresa['city_id']==$grad['city_id']?'selected="selected"':'';
                    echo '<option value="'.$grad['city_id'].'" '.$selektirano.'>'.$grad['city'].'</option>';
                }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="postal_code">Unesite poštanski broj</label>
        <input type="text" class="form-control"  name="postal_code"  value="<?php echo $adresa['postal_code']; ?>"/>
    </div>
    <div class="form-group">
        <label for="phone">Unesite telefon/mobitel</label>
        <input type="text" class="form-control"  name="phone"  value="<?php echo $adresa['phone']; ?>"/>
    </div>
    <input type="hidden" name="address_id" value="<?php echo $adresa['address_id'] ?>" />
    <input type="submit" class="btn btn-info" value="Spremi" />
</form>