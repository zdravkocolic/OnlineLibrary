<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Contact Us</title>
  </head> 
   
<body>
<style>
.jumbotron{
  width: 100%;
  background-image: url("../../public/slike/jumbbg.jpg");
  color: white;
  box-shadow: inset 1000px 1000px rgba(0, 0, 0, .3);
  margin-bottom: 0;
}
.spaceknjiga{
  opacity: 0.3;
}
.drugi{
  background-image: url("../../public/slike/dvabg.jpg");
  margin-top:0;
  padding: 40px;
}
.plavi{
  border: 10px solid #17a2b8;
  padding: 30px;
  margin: 10px;
}

.zuti{
  border: 10px solid #ffc107;
  padding: 30px;
  margin: 10px;
}
.zeleni{
  border: 10px solid #28a745;
  padding: 30px;
  margin: 10px;
}
.kontakt{
  background-image: url("../../public/slike/kontakt.jpg");
  box-shadow: inset 1000px 1000px rgba(0, 0, 0, .7);
  background-position: center;
  color: white;
  min-height:450px;
  padding-top: 100px;
  padding-bottom: 100px;
}

</style>
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
        <h1 class="display-4 text-warning font-weight-bold">Contact us</h1>
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

<section class="contactPrva" style="margin-top:-100px">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-sm-12 col-md-5 col-lg-5 text-center bg-white py-3">
                <img src="../../public/slike/phone.svg" alt="ikonica" style="width:50px; height:50px;  margin-bottom: 30px"> <br>
                <span class="font-weight-bold " style="font-size: large;">Talk to sales</span>
                <br>
                <br>
                <span>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</span>
                <br>
                <br>
                <span class=" my-3 badge badge-pill badge-info">+381 1 235 54789</span>
            </div>
            <div class="col-sm-12 col-md-5 col-lg-5 text-center bg-white py-3">
                <img src="../../public/slike/chat.svg" alt="ikonica" style="width:50px; height:50px; margin-bottom: 30px"> <br>
                <span class="font-weight-bold " style="font-size: large;">Contact Customer Support</span>
                <br><br>
                <span>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</span>
                <br><br>
                <span class="badge badge-pill badge-warning p-3 my-3">Contact Support</span>
            </div>
        </div>
    </div>
</section>
<!-- kraj prve sekcije -->

<section class="contactDruga py-4">
    <div class="container">
        <div class="row text-center py-5">
            <div class="col">
                <h3>Kako nas možete pronaći?</h3>
            </div>
        </div>
        <div class="row border border-info">
            <div class="col-sm-12 col-md-9 col-lg-10 ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13153513.542052468!2d24.958509788440583!3d36.40176657044786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4759d346214d7023%3A0x24e09c285d06b7e0!2z0J3QsNGA0L7QtNC90LAg0LHQuNCx0LvQuNC-0YLQtdC60LAg0KPQttC40YbQtQ!5e0!3m2!1ssr!2srs!4v1632321565820!5m2!1ssr!2srs" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-2 py-3 text-center">
                <h4>Headquarters</h4>
                <span>Народна библиотека Ужице <br>
                    Trg Partizana 12, Ужице</span><br> <br>
                    <h4>Phone / Fax</h4>
                <span>+381 123 456 5789 <br>
                    +381 987 564 3334</span>
                    <br><br>
                    <h5>Press / Media/ Blogger Information</h5>
                <a href="https://www.biblioteka-uzice.rs/" target="_blank" class="text-info font-weight-bold">Naše kancelarije u Užicu</a>

            </div>
        </div>
    </div>
</section>
<!-- footer -->
<?php
  include APPPATH. '/Views/templates/footer.php'; ?>


