

<section class="hmpg">
<?php include 'templates/header.php' ?>
    <div class="container pt-5">
        <div class="row justify-content-md-center pt-5">
 
            <div class="col-6">
                <h1>Sign In</h1>
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif;?>
                <form action="/domaci/public/login/auth" method="post">
                    <div class="mb-3">
                        <label for="InputForEmail" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="InputForPassword">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    
                </form>
                <a class="btn btn-success mt-5" href="/domaci/public/register" class="py-3">Nemate nalog? Registrujete se.</a>
            </div>
             
        </div>
    </div>
</section>
    <?php include 'templates/footer.php' ?>
