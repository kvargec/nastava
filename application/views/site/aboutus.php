<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<script>
    $(document).ready(function() {
        $("#korisnik").click(function() {
            $("#rezultati").html('<img src="<?php echo SITE_URL; ?>/img/giphy.gif" />');
            $.ajax({
                url: "https://reqres.in/api/products/2",
                type: "GET",
                success: function(response) {
                    $("#rezultati").html(response.data.name);
                }
            });
        });
        $("#klik2").click(function(){
            $.ajax({
                url:"<?php echo SITE_URL ?>index.php?kontr=Site&akcija=ajax",
                type:"POST",
                data:{'podatak':'Idemo'},
                success: function(response) {
                    $("#rezultati").html(response);
                }      
            })
        })
    })
</script>
<h4>About us</h4>
<?php echo $info; ?>
<p>Pa tekst o nama</p>
<a href="#" id="korisnik" class="btn btn-danger">Klikni</a>
<a href="#" id="klik2" class="btn btn-warning">Ajax 2</a>
<div id="rezultati">

</div>