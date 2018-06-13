<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<form method="POST" action="<?php echo SITE_URL; ?>index.php?kontr=Customer&akcija=trazi">
<div class="form-group">
        <label for="first_name">Odabir pretrage</label>
        <select name="odabir">
            <option value="ime">Ime</option>
            <option value="prezime">Prezime</option>
        </select>
</div>
    <div class="form-group">
        <input type="text" name="pojam" placeholder="Upišite pojam" />
    </div>
    <input type="submit" class="btn btn-success" value="Pretraži" />
</form>