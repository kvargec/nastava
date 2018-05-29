<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<h3><?php echo $poruka; ?></h3>
<form method="POST" action="<?php echo SITE_URL; ?>index.php?kontr=Customer&akcija=snimiadresu">
    <div class="form-group">
        <label for="address">Unesite adresu</label>
        <input type="text" class="form-control"  name="address" />
    </div>
    <div class="form-group">
        <label for="district">Unesite regiju</label>
        <input type="text" class="form-control"  name="district" />
    </div>
    <div class="form-group">
        <label for="city">Odaberite grad</label>
        <select class="form-control"  name="city_id" >
            <?php 
                foreach($gradovi as $grad){
                    echo '<option value="'.$grad['city_id'].'">'.$grad['city'].'</option>';
                }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="postal_code">Unesite poštanski broj</label>
        <input type="text" class="form-control"  name="postal_code" />
    </div>
    <div class="form-group">
        <label for="phone">Unesite telefon/mobitel</label>
        <input type="text" class="form-control"  name="phone" />
    </div>
    <input type="submit" class="btn btn-info" value="Spremi" />
</form>