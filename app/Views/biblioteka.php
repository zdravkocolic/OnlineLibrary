<?php
require_once ('templates/input.php');
require_once ('templates/operation.php');
 ?>
 <head><link rel="stylesheet" href="<?= base_url();?>/css/stil.css" type="text/css"></head>
<section class="head">
  <div>
    <img src="<?= base_url();?>/slike/pocetnaknjige.jpg" style="height: 400px; width: 100%;">
  </div>
</section>
<section style="background-color:#c7c6a4; color: white;">
  <?php include 'templates/header.php';?>
<div class="container text-center py-1 rounded">

    <h3><img src="<?= base_url();?>/slike/bookcharacter.png" style="height: 100px; width: 100px;"> Dobrodošli u našu online biblioteku. <img src="<?= base_url();?>/slike/girl.png" style="height: 100px; width: 100px;"></h3>
</div>
</section>

<section style="background-color:#c7c6a4;">
  <div class="container">
    <div class="row justify-content-between">
        
    <?php
                        if($book_data):
                          ?>
                          <?php
                            foreach($book_data as $book): 
                             // var_dump($book);
                              ?>
                            <div class="card col-sm-6 col-md-4 col-lg-3 my-3 text-center opis">
                            <img data-id="<?php echo $book['id']; ?>" class="card-img-top pt-1 rounded" src="<?=base_url().'/slike/knjige/'. $book['book_image'];?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 data-id="<?php echo $book['id']; ?>" class="card-title"><?php echo $book['book_name']; ?></h5>
                                <em><h6 data-id="<? echo $book['id']; ?>" class="card-title text-secondary"><?php echo $book['book_publisher']; ?></h6></em>
                                <h6 data-id="<?php echo $book['id']; ?>" class="card-title">Cena za iznajmljivanje: <?php echo $book['book_price'].' RSD'; ?></h6>
                                <p data-id="<?php echo $book['id']; ?>" class="card-text hideContent"><?php echo substr($book['book_details'], 0, 50). '...'; ?></p>
                                  <div class="info text-center">
                                    <a href="./naruci?id=<?php echo $book['id'];?>" class="card-link btn btn-danger naruci">Naruči</a>
                                    <a href="./detalji?id=<?php echo $book['id'];?>" class="card-link text-secondary detalji"> Detaljnije...</a>
                                  </div>
                                </div>
                            </div>
                              <?php
                            endforeach; ?>
                         <?php endif; ?>
    </div>
  </div>
 
</section>
<script> 
  let showAll = ()=>{
    <?php echo $book['book_details']; ?>
  }
</script>
<?php include 'templates/footer.php' ?>
