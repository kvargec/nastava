<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<script>
    $(document).ready(function(){
       $("#trazi").click(function(){
           var pojam=$("#q").val();
           var gdje=$("#gdje").val();
            $.ajax({
                method:"POST",
                url: "<?php echo SITE_URL ?>index.php?kontr=Trazi&akcija=pretraga",
                data:{'pojam':pojam,'tablica':gdje},
                context: document.body
              }).done(function(data) {
                $("#rezultati" ).html(data);
              });
       })
    });
</script>
<div class="card">
  <div class="card-header">
   Pretraži bazu
  </div>
  <div class="card-body">
      <div class="row">
      <div class="col-lg-6">
          <input type="text" id="q" class="form-control " placeholder="Upišite tekst" />
      </div>
      <div class="col-lg-2">
          <select id="gdje" class="form-control">
              <option value="actor">Glumci</option>
              <option value="film" selected="selected">Filmovi</option>
          </select>
      </div>
      <div class="col-lg-2">
      <a href="#" id="trazi" class="btn btn-warning">Traži</a>
      </div>
    </div>
  </div>
</div>
<div id="rezultati">
    
</div>

