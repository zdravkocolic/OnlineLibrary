<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
<link rel="stylesheet" href="<?= base_url();?>/css/stil.css" type="text/css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="<?= base_url();?>/pages/showme"><img src="<?= base_url();?>/slike/sova.png" style="width:50px; height:50px;">Biblioteka</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav mr-auto">
    <div class="navbar-nav">
          <a class="nav-item nav-link active" href="<?= base_url();?>/pages/showme">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link active" href="<?= base_url();?>/biblioteka">Biblioteka</a>
          <a class="nav-item nav-link active" href="<?= base_url();?>/pages/about">O nama</a>
          <a class="nav-item nav-link active" href="<?= base_url();?>/pages/contact">Kontakt</a>
        </div>
    </div>
    <?php if($_SESSION["user_id"]) :?>
    <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle btn btn-info text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo 'Dobrodošli, ' .$_SESSION['name'].'. '; ?></a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/domaci/public/dashboard">Profil</a>
            
            <?php if($_SESSION['isAdmin']=='1'):?>
				<a class="dropdown-item" href="/domaci/public/admin">Admin meni</a>
			<?php endif;?>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/domaci/public/login/logout">Odjavi se</a>
            </div><?php endif; ?> 
    </div>    
</div>
</nav>
