<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="<?php echo SITE_URL; ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <script src="<?php echo SITE_URL; ?>js/jquery.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    Izbornik
                    <br />
                    <?php 
                    if(isset($_SESSION['user'])){
                        echo 'User: '.$_SESSION['user'];
                    }
                    ?>
                    <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link active" href="<?php echo SITE_URL; ?>index.php?kontr=Film">Filmovi</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo SITE_URL; ?>index.php?kontr=Actor">Glumci</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo SITE_URL; ?>index.php?kontr=Customer">Kupci</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo SITE_URL; ?>index.php?kontr=Trazi">Tražilica</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo SITE_URL; ?>index.php?kontr=Site&akcija=page&id=aboutus">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo SITE_URL; ?>index.php?kontr=Site&akcija=page&id=contact">Kontakt</a>
                    </li>
                    <?php if(isset($_SESSION['user'])){?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo SITE_URL; ?>index.php?kontr=Site&akcija=logout">Logout</a>
                    </li>
                    <?php }else{?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo SITE_URL; ?>index.php?kontr=Site&akcija=page&id=login">Login</a>
                    </li>
                    <?php } ?>
                  </ul>
                </div>
                <div class="col-10">