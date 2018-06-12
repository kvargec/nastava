<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// zato sto imamo samo jedan film, pa i jedan element niza
$film=$film[0];
$ratinzi=array('G', 'PG', 'PG-13', 'R', 'NC-17');
$specijal=array('Trailers','Commentaries','Deleted Scenes','Behind the Scenes');
?>
<form method="POST" action="<?php echo SITE_URL; ?>index.php?kontr=Film&akcija=update">
    <input type="hidden" name="film_id" value="<?php echo $film['film_id'] ?>" />
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control"  name="title" value="<?php echo $film['title'];?>"/>
    </div>
    <div class="form-group">
        <label for="title">description</label>
        <textarea class="form-control"  name="description">
            <?php echo $film['description'];?>
        </textarea>
    </div>
    <div class="form-group">
        <label for="language_id">language_id</label>
        <select class="form-control"  name="language_id" >
            <?php 
                foreach($jezici as $jezik){
                    $selektirano= $film['language_id']==$jezik['language_id']?'selected="selected"':'';
                    echo '<option value="'.$jezik['language_id'].'" '.$selektirano.'>'.$jezik['name'].'</option>';
                }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="rating">rating</label>
        <select class="form-control"  name="rating" >
            <?php 
                foreach($ratinzi as $rtz){
                    $selektirano= $film['rating']==$rtz?'selected="selected"':'';
                    echo '<option value="'.$rtz.'" '.$selektirano.'>'.$rtz.'</option>';
                }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="special_features">specijal</label>
        <select class="form-control"  name="special_features" >
            <?php 
                foreach($specijal as $rtz){
                    $selektirano= $film['special_features']==$rtz?'selected="selected"':'';
                    echo '<option value="'.$rtz.'" '.$selektirano.'>'.$rtz.'</option>';
                }
            ?>
        </select>
    </div>
    <input type="submit" class="btn btn-danger" value="Spremi" />
</form>
