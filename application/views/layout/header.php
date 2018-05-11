<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="<?php echo SITE_URL; ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="<?php echo SITE_URL; ?>js/jquery.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    Izbornik
                    <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link active" href="<?php echo SITE_URL; ?>index.php?kontr=Film">Filmovi</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo SITE_URL; ?>index.php?kontr=Actor">Glumci</a>
                    </li>
                    
                  </ul>
                </div>
                <div class="col-10">