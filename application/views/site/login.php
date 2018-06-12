<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//echo sha1("Ovo je šifra");
if (!isset($_SESSION['user'])){
?>

<form method="POST" action="<?php echo SITE_URL?>index.php?kontr=Site&akcija=login">
    <input type="text" name="username" class="form-control" />
    <input type="password" name="password" class="form-control" />
    <input type="submit" value="Login" class="btn btn-warning" />
</form>
<?php } ?>
