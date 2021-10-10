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
    mysqli_close($con);
    //print_r($knjiga);
}

?>

<!DOCTYPE html>
<head>
<link rel="stylesheet" href="<?= base_url();?>/css/detalji.css" type="text/css">
</head>


<section class="poz">
    <html lang="en">
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

<?php include_once('templates/footer.php') ?>

