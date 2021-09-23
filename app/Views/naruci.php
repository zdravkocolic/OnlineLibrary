<?php 
require_once ('templates/input.php');
require_once ('templates/operation.php');
//proveravamo GET request id parametar

if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($con, $_GET['id']);

    //sql da uzmemo podatke
    $sql="SELECT * FROM books WHERE id=$id";
    //skupljamo query podatke
    $res = mysqli_query($con, $sql);

    //stavljamo ih u niz
    $knjiga = mysqli_fetch_assoc($res);

    mysqli_free_result($res);
    
    //print_r($knjiga);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="<?= base_url();?>/css/detalji.css" type="text/css">
</head>

<body>

<section class="poz">
<?php include_once ('templates/header.php'); ?>
    <div class="container py-4"> 
        <div class="row">
            <div class="col">
                <?php if($knjiga): ?>
                    <img src="<?=base_url().'/slike/knjige/'. $knjiga['book_image'];?>" alt="Slika omota knjige">
                    </div>
                    <div class="col align-self-center">
                        <h4><?php echo $knjiga['book_name']; ?></h4>
                                    <hr>    
                                    <em><h5> <? echo $knjiga['id']; ?> <?php echo $knjiga['book_publisher']; ?></h5></em>
                                    <hr>
                                    <h5>Cena za iznajmljivanje: <?php echo $knjiga['book_price'].' RSD'; ?></h5>
                                    <hr>
                                    <p><?php echo $knjiga['book_details'] ?>
                        <?php else: ?>
                            <h4>Error! No such book here!</h4>
                        <?php endif; ?>
                    </div> 
        </div>
    </div>                       
</section>
<section class="slanje">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST">
                    <div class="form-group">
                        <label for="nazivKnjige">Naziv knjige</label>
                        <input type="nazivKnjige" class="form-control" 
                        id="nazivKnjige" 
                        name="naziv" 
                        value="<?php echo $knjiga['book_name']; ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email addresa</label>
                    <input type="email" 
                    class="form-control"
                    name="email"  
                    id="email" 
                    aria-describedby="emailHelp" 
                    value="<?php echo $_SESSION['email']; ?>">
                    <small id="emailHelp" 
                    class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="ime">Ime</label>
                    <input type="ime"
                    name="ime"  
                    class="form-control" 
                    id="ime" 
                    value="<?php echo $_SESSION['name']; ?>">
                </div>
                <div class="form-group">
                    <label for="prezime">Prezime</label>
                    <input type="prezime"
                    name="prezime"  
                    class="form-control" 
                    id="prezime" 
                    value="<?php echo $_SESSION["last_name"]; ?>">
                </div>
                <div class="form-group">
                    <label for="adresa">Adresa</label>
                    <input type="adresa"
                    name="adresa"  
                    class="form-control" 
                    id="adresa" 
                    placeholder="Adresa">
                </div>
                <div class="form-group">
                    <label for="brojtelefona">Broj telefona</label>
                    <input type="brojTelefona" 
                    name="brojTelefona" 
                    class="form-control" 
                    id="brojTelefona" 
                    placeholder="Broj telefona">
                </div>
                
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

            </div>
        </div>
    </div>
</section>
<?php

    if(isset( $_POST["submit"])){
        $naziv = $_REQUEST['naziv'];
        $ime = $_REQUEST['ime'];
        $email = $_REQUEST['email'];
        $prezime = $_REQUEST['prezime'];
        $adresa = $_REQUEST['adresa'];
        $telefon = $_REQUEST['brojTelefona'];
        
  if($naziv && $ime && $email && $prezime && $adresa && $telefon){
    $sql= "INSERT INTO narudzbine (naziv_knjige, email, ime, prezime, adresa, telefon)
    VALUES ('$naziv', '$email', '$ime','$prezime','$adresa', '$telefon')";

    if(mysqli_query($GLOBALS['con'], $sql)){
        TextNode("success", "Record Successfully inserted!");
        
    }else{
        echo "Error";
    }
} 
}
    

 ?>
<?php include_once('templates/footer.php') ?>

</body>
</html>