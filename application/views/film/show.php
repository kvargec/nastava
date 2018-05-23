<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$info=$film[0];
?>
<script>
    $(document).ready(function(){
       $("#glumci").click(function(){
            $.ajax({
                url: "<?php echo SITE_URL ?>index.php?kontr=Film&akcija=popisGlumaca&id=<?php echo $info['film_id']; ?>",
                context: document.body
              }).done(function(data) {
                $("#glumciPopis" ).html(data);
              });
       })
    });
</script>
<div class="card">
  <div class="card-header">
    <?php echo $info['title'] ?>
  </div>
  <div class="card-body">
    <h5 class="card-title"><?php echo $info['rating'] ?></h5>
    <p class="card-text"><?php echo $info['description'] ?></p>
    <?php foreach($kategorije as $kat) {?>
    <span class="badge badge-warning"><?php echo $kat['name']; ?></span>
    <?php } ?>
    <hr />
    <a href="#" class="btn btn-primary"><?php echo $info['rental_rate'] ?></a>
    <a href="#" id="glumci" class="btn btn-warning">Prikaži glumce</a>
  </div>
    <div id="glumciPopis">
        
    </div>
</div>
