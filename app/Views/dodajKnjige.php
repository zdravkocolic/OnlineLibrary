<?php if($_SESSION['isAdmin']=='1'):?>
<?php
require_once ('templates/input.php');
require_once ('templates/operation.php');

?>

<head>
<link rel="stylesheet" href="<?= base_url();?>/css/dodaj.css" type="text/css">
</head>


<section class="dodaj">
<?php
include 'templates/header.php'; ?>
    <div class="container">
        <div class="d-flex justify-content-center">
            <form method="post" class="w-50">
                <div class="pt-2">
                    <label>Select Image File:</label>
                    <input type="file" name="book_image">
                    
                </div>
                <div class="pt-2">
                    <?php inputElement("<i class='fas fa-id-badge'></i>", "ID", "book_id", setID()); ?>
                </div>
                <div class="pt-2">
                    <?php inputElement("<i class='fas fa-book'></i>", "Book Name", "book_name", ""); ?>
                </div>
                 
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text bg-warning"><i class="fas fa-info"></i></div>
                    </div>
                            <textarea holder="Details" name="book_details" rows="4" cols="50"> </textarea>
                        
                </div>
                <div class="row pt-2">
                    <div class="col">
                        <?php inputElement("<i class='fas fa-people-carry'></i>", "Publisher", "book_publisher", ""); ?>
                    </div>
                    <div class="col"> 
                        <?php inputElement("<i class='fas fa-dollar-sign'></i>", "Price", "book_price", ""); ?>
                    </div>
                        
                </div>
                
                <div class="d-flex justify-content-center">
                    <?php buttonElement("btn-create", "btn btn-success", "<i class='fas fa-plus'></i>", "create", "dat-toggle='tooltip' data-toggle='tooltip' data-placement='bottom' title='Create'") ?>
                    <?php buttonElement("btn-read", "btn btn-primary", "<i class='fas fa-sync'></i>", "read", "dat-toggle='tooltip' data-toggle='tooltip' data-placement='bottom' title='Read'") ?>
                    <?php buttonElement("btn-update", "btn btn-light border", "<i class='fas fa-pen-alt'></i>", "update", "dat-toggle='tooltip' data-toggle='tooltip' data-placement='bottom' title='Update'") ?>
                    <?php buttonElement("btn-delete", "btn btn-danger", "<i class='fas fa-trash-alt'></i>", "delete", "dat-toggle='tooltip' data-toggle='tooltip' data-placement='bottom' title='Delete'") ?>
                    <?php deleteBtn(); ?>
                </div>
            </form>
        </div>

        <!-- TABLE -->

        <div class="d-flex table-data">
            <table class="table table-striped table-dark">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Book Name</th>
                        <th>Publisher</th>
                        <th>Book Price</th>
                        <th>Book Details</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody id="tdbody">
                    <?php 
                    
                    if(isset($_POST['read'])){
                       $res= getData();
                       if($res){
                           while($row= mysqli_fetch_assoc($res)){ ?>
                           <tr>
                               <td data-id="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></td>
                               <td data-id="<?php echo $row['id']; ?>"><?php echo $row['book_image']; ?></td>
                               <td data-id="<?php echo $row['id']; ?>"><?php echo $row['book_name']; ?></td>
                               <td data-id="<?php echo $row['id']; ?>"><?php echo $row['book_publisher']; ?></td>
                               <td data-id="<?php echo $row['id']; ?>"><?php echo $row['book_price'].' RSD'; ?></td>
                              <td data-id="<?php echo $row['id']; ?>"><?php echo substr($row['book_details'], 0, 30); ?></td>
                               <td><i class="fas fa-edit btnedit" data-id="<?php echo $row['id']; ?>"></i></td>
                           </tr>
                            <?php
                           }
                       }
                    }
                    
                    ?>
                   
                </tbody>
            </table>

        </div>
    </div>

</section>
<?php endif;?>
<?php include 'templates/footer.php' ?>