
<section class="hmpg">
<?php include 'templates/header.php' ?>
    <div class="container py-5">
        <div class="row justify-content-md-center pt-5">
 
            <div class="col-6">
                <h1>Sign Up</h1>
                <?php if(isset($validation)):?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif;?>
                <form action="/domaci/public/register/save" method="post">
                    <div class="mb-3">
                        <label for="InputForFirstName" class="form-label">Ime</label>
                        <input type="text" name="first_name" class="form-control" id="InputForFirstName" value="<?= set_value('first_name') ?>">
                    </div>
					<div class="mb-3">
                        <label for="InputForLastName" class="form-label">Prezime</label>
                        <input type="text" name="last_name" class="form-control" id="InputForLastName" value="<?= set_value('last_name') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForEmail" class="form-label">Email adresa</label>
                        <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="InputForPassword">
                    </div>
                    <div class="mb-3">
                        <label for="InputForConfPassword" class="form-label">Potvrdite Password</label>
                        <input type="password" name="confpassword" class="form-control" id="InputForConfPassword">
                    </div>
                    <button type="submit" class="btn btn-primary">Registracija</button>
                </form>
                <a class="btn btn-success mt-5" href="/domaci/public/login">Već ste registrovani? Ulogujte se.</a>
            </div>
             
        </div>
    </div>
</seciton>
    <?php include 'templates/footer.php' ?>