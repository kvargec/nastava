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
        })
    })
</script>
<h4>About us</h4>
<p>Pa tekst o nama</p>
<a href="#" id="korisnik" class="btn btn-danger">Klikni</a>
<div id="rezultati">

</div>