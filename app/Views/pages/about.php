<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>About Us</title>
  </head> 
   
<section>
<div class="jumbotron pt-3">
  <div class="container">
  <div class="row text-success text-uppercase font-weight-bold">
      <div class="col-9">
          <span>contact us on 0 800 123 4567 or bibliotekasupport@gmail.com</span>
      </div>
      <?php if(!$_SESSION["user_id"]): ?>
      <div class="col-3">
       <?php echo '<p><a  href="/domaci/public/login" class="text-success">register / login </a></p>'; ?>
      </div>
      <?php endif; ?>
  </div>
  <div class="container">
    
  <?php
  include APPPATH. '/Views/templates/header.php'; ?>
    <div class="row align-items-center">
      <div class="col-6 pl-0">
        <h1 class="display-4 text-warning font-weight-bold">About us</h1>
        <p class="lead">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
        
       
      </div>
      <div class="col-6">
        <img class="spaceknjiga" src="../../public/slike/spaceknjiga.jpg" style="width: 100%; height:100%">
      </div>
    </div>
  </div>
</div>
            </div>
            </div>
</section>
<!-- kraj hedera -->
<!-- body -->

<!-- prva sekcija -->
<section class="prvaAbout bg-info">
    <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12 pr-0">
                        <img src="../../public/slike/bluebook.jpg" style="height:400px; width:100%;">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 text-center text-white">
                        <h1 class="pb-5 text-warning">Caption 1</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
        </div>
    
</section>

<!-- druga sekcija -->
<section class="drugaAbout bg-warning">
    <div class="container">
        <div class="row align-items-center">        
                    <div class="col-lg-6 col-md-6 col-sm-12 text-center text-white">
                        <h1 class="pb-5 text-info">Caption 2</h1>
                        <p class="text-success">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                
                
                    <div class="col-lg-6 col-md-6 col-sm-12 pl-0">
                        <img src="../../public/slike/yellowbook.jpg" style="height:400px; width:100%;">
                    </div>
                </div>
</section>

<!-- treca sekcija -->
<section class="trecaAbout bg-success">
    <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12 pr-0">
                        <img src="../../public/slike/greenbook.png" style="height:400px; width:100%;">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 text-center text-white">
                        <h1 class="pb-5 text-warning">Caption 3</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
        </div>
    
</section>
<!-- footer -->
<?php
  include APPPATH. '/Views/templates/footer.php'; ?>
