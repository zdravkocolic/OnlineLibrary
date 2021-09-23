<!doctype html>
<html lang="en">

   
<body>

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
        <h1 class="display-4 text-warning font-weight-bold">Dobrodošli!</h1>
        <p class="lead">Pretražite našu biblioteku ako ste u potrazi za knjigom koju želite za sebe ili tražite poklon za Vama dragu osobu.</p>
        <hr class="my-4">
        <p>Naša biblioteka sadrži mnoštvo knjiga koje možete iznajmiti ili kupiti preko naše online biblioteke. Srećna potraga!</p>
        <p class="lead">
          <a class="btn btn-info btn-lg" href="/domaci/public/login" role="button">Krenite u potragu...</a>
        </p>
      </div>
      <div class="col-6">
        <img class="spaceknjiga" src="../../public/slike/spaceknjiga.jpg" style="width: 100%; height:100%">
      </div>
    </div>
  </div>
</div>

</section>
<!-- kraj hedera -->

<section class="drugi">
<!-- sekcija br2 -->
<div class="container">
<div class="row justify-content-between">
  
    <div class="card col-lg-3 col-md-5 col-sm-12 plavi">
  <img class="card-img-top" src="../../public/slike/potraga.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Go somewhere</a>
  </div>
</div>
 
    <div class="card col-lg-3 col-md-5 col-sm-12 zuti">
  <img class="card-img-top" src="../../public/slike/potraga.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-warning">Go somewhere</a>
  </div>
</div>
  
  <div class="card col-lg-3 col-md-5 col-sm-12 zeleni">
    <img class="card-img-top" src="../../public/slike/potraga.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-success">Go somewhere</a>
    </div>
</div>
</div>

</div>
</section>
<!-- kraj druge sekcije -->

<!-- bestsellers -->
<section class="bestsellers py-5">
  <div class="container">
    <div class="row justify-content-center">
      <h1 class="font-weight-bold">Books Bestsellers</h1>
    </div>
  </div>
  <div class="container">
    <div class="row">
    <div class="card-group justify-content-between">
  <div class="col-lg-2 col-md-4 col-sm-12">
    <div class="card border my-4 border-info">
    <img class="card-img-top" src="../../public/slike/knjige/zamkaZaSnove.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Zamka za snove</h5>
    </div>
    <div class="card-footer bg-info">
      <small>Pisac: Stiven King</small>
    </div>
  </div>
</div>
  <div class="col-lg-2 col-md-4 col-sm-12">
  <div class="card border my-4 border-warning">
    <img class="card-img-top" src="../../public/slike/knjige/ElizinaTajna.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Elizina tajna</h5>
    </div>
    <div class="card-footer bg-warning">
      <small>Pisac: Dominik V. Retinger</small>
    </div>
  </div>
</div>
  <div class="col-lg-2 col-md-4 col-sm-12">
  <div class="card border my-4 border-success">
    <img class="card-img-top" src="../../public/slike/knjige/damin gambit.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Damin Gambit</h5>
    </div>
    <div class="card-footer bg-success">
      <small>Pisac: Volter Tevis</small>
    </div>
  </div>
</div>
  <div class="col-lg-2 col-md-4 col-sm-12">
  <div class="card border my-4 border-info">
    <img class="card-img-top" src="../../public/slike/knjige/decaZla.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Deca zla</h5>
    </div>
    <div class="card-footer bg-info">
      <small>Pisac: Miodrag Majić</small>
    </div>
  </div>
</div>
  <div class="col-lg-2 col-md-4 col-sm-12">
  <div class="card border my-4 border-warning">
    <img class="card-img-top" src="../../public/slike/knjige/Benzin.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Benzin</h5>
    </div>
    <div class="card-footer bg-warning">
      <small>Pisac: Dragan Stojanović</small>
    </div>
  </div>
</div>
</div>
    </div>
  </div>
</section>
<!-- kraj bestsellera -->
<!-- kontakt -->
<section class="kontakt">
<form class="container justify-content-between">

      <h3 class="font-weight-bold text-success">Contact us</h3>
    <div class="row justify-content-between">
      <div class="col">
        <label for="email"><b>Email:</b></label> <br>
        <input class="mb-2" type="text" placeholder="Enter Email" name="email" required>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <label for="psw"><b>Ime i Prezime:</b></label><br>
        <input class="mb-2" type="password" placeholder="Unesite ime i prezime" name="iip" required>
      </div>
    </div>
    <div class="row">
      <div class="col">
      
        <label for="placeholder"><b>Poruka:</b></label> <br>
        <textarea id="subject" name="subject" placeholder="Vaša poruka.." style="height:100px; width:250px"></textarea> <br>
        <button type="submit" class="btn btn-success">Pošalji</button>
      </div>
    </div> 
    
  </form>
</section>
<!-- kraj sekcije kontakt -->
<!-- footer -->
<?php
  include APPPATH. '/Views/templates/footer.php'; ?>
