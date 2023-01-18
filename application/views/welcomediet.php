<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

 <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    
    <!-- My Css -->
    <link href="assets/css/welcome.css" rel="stylesheet">

    <title>Diet-in Aja</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url('welcomediet')?>">Diet-in Aja</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="<?= base_url('Welcomediet')?>">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="<?= base_url('Kalkulator')?>">Calculator</a>
            <a class="nav-item nav-link" href="<?= base_url('Mitosfakta')?>">Myth and Fact</a>
            <a class="nav-item nav-link" href="<?= base_url('Kalorimakanan')?>">Food Calories</a>
            <a class="nav-item nav-link" href="<?= base_url('Profile')?>">Profile</a>
            <a class="nav-item nav-link" href="<?= base_url('login/logout')?>">Logout</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <?= $this->session->flashdata('message'); ?>
        <h1 class="display-4">A healthy <span> Outside </span><br>Starts from the <span>Inside.</span></h1>
        <hr>
      </div>
    </div>
    <!-- Akhir Jumbotron -->


    <!-- Container -->
    <div class="container">

      <!-- Info Panel -->
      <!-- <div class="row justify-content-center">
        <div class="col-10 info-panel">
        <h2 class="display-5">What's Inside?</h2>
          <div class="row">
            <div class="col-lg">
              <img src="assets/img/kalku.jpg" alt="Employee" class="float-left">
              <h4>Calculator</h4>
              <p>Check how much your body Calories need!</p>
            </div>
            <div class="col-lg">
              <img src="assets/img/fakta.jpg" alt="High Res" class="float-left">
              <h4>Myth and Fact</h4>
              <p>Find out Myths and Facts about Diets!</p>
            </div>
            <div class="col-lg">
              <img src="assets/img/calories.jpg" alt="Security" class="float-left">
              <h4>Food Calories</h4>
              <p>Check the Calories of your Foods!</p>
            </div>
          </div>
        </div>
      </div> -->
      <!-- Akhir Info Panel -->


      <!-- Working Space -->
      <div class="row workingspace">
        <div class="col-lg-6">
          <img src="assets/img/menu3.jpeg" alt="workingspace" class="img-fluid">
        </div>
        <div class="col-lg-5">
          <h3>Don't Just Focus On <span>Weight Loss</span> Focus On <span>Health.</span></h3>
          <!-- <p>Bekerja dengan suasana hati yang lebih asli dan mempelajari hal baru setiap harinya.</p>
          <a href="" class="btn btn-primary tombol">Gallery</a> -->
        </div>
      </div>
      <!-- Akhir Working Space -->


      <!-- Testimonial -->
      <!-- <section class="testimonial">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h5>"Workout. Eat Well. Be Patient. You Will See the Result!"</h5>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-6 justify-content-center d-flex">
          <figure class="figure">
              <img src="assets/img/bagas.jpg" class="figure-img img-fluid rounded-circle utama" alt="Testi 1">
            </figure>
            <figure class="figure">
              <img src="assets/img/diffa2.jpg" class="figure-img img-fluid rounded-circle utama" alt="Testi 2">
            </figure>
            <figure class="figure">
              <img src="assets/img/nanda.jpg" class="figure-img img-fluid rounded-circle utama" alt="Testi 3">
              <figcaption class="figure-caption">
                <h5>MARS</h5>
                <p>Mahasiswi</p>
              </figcaption>
            </figure>
            <figure class="figure">
              <img src="assets/img/ginar.jpg" class="figure-img img-fluid rounded-circle utama" alt="Testi 4">
            </figure>
            <figure class="figure">
              <img src="assets/img/putra.jpg" class="figure-img img-fluid rounded-circle utama" alt="Testi 1">
            </figure>
          </div>
        </div>
      </section> -->
      <!-- Akhir Testimonial -->



      <!-- Footer -->
      <div class="row footer">
        <div class="col text-center">
          <p>2021 All Rights Reserved by IF7_MARS.</p>
        </div>
      </div>
      <!-- Akhir Footer -->

    </div>
    <!-- Akhir Container -->





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>