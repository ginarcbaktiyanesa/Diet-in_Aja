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
    
    <!-- Font -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- My Css -->
    <link href="assets/css/kalori.css" rel="stylesheet">

    <title><?= $title; ?></title>
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
        <!-- let's check the calories in food -->
        <h1 class="display-4">Let's Check<br><span>Calories</span> in the<span> Food</span>!</h1>
        <hr>
      </div>
    </div>
    <!-- Akhir Jumbotron -->


    <!-- Container -->
    <div class="container">

      <!-- Info Panel -->
      <div class="row justify-content-center">
        <div class="col-10 info-panel">
        <h4>Search Food with English Language.</h4>
        <!-- <h2 class="display-5"></h2> -->
          <section class="search-bar">
            <div class="container">
              <div class="row">
                <div class="col-lg-10 mx-auto">
                  <form method="post" action="<?= base_url("Kalorimakanan")?>"> 
                    <div>
                      <div class="input-group">
                        <input type="search" placeholder="Search food" class="form-control" name="food">
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-secondary" name="search" value="true" >
                            <i class="fas fa-search"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <!-- Akhir Info Panel -->


      <!-- Working Space -->
      <div class="row workingspace">
        <div class="col-lg-6">
        <div class="card text-white bg-secondary mb-3" style="max-width: 18rem; margin-left:150px;">
            <div class="card-header text-uppercase text-center"><?=$hasil['label'];  ?></div>
            <div class="card-body">
            <img src="<?= $hasil['image']; ?>" alt="workingspace" class="img-fluid">
            </div>
          </div>
          
        </div>
        <div class="col-lg-5">


        <div class="card">
          <!-- <div class="card-header">
            Nutrients
          </div> -->
          <div class="card-body">
              <h5 class="card-title text-center">Nutrients</h5>
              <p class="card-text font-weight-normal text-dark" >Calories                      : <?= $hasil['nutrients']['ENERC_KCAL']; ?> kcal</p>
              <p class="card-text font-weight-normal text-dark" >Calories from protein       : <?= $hasil['nutrients']['PROCNT'];?> kcal</p>
              <p class="card-text font-weight-normal text-dark" >Calories from fat           : <?= $hasil['nutrients']['FAT']; ?> kcal</p>
              <p class="card-text font-weight-normal text-dark" >Calories from carbohydrates : <?=$hasil['nutrients']['CHOCDF'];?> kcal</p>
              <p class="card-text font-weight-normal text-dark" >Fiber, total dietary        : <?=$hasil['nutrients']['FIBTG'];?> kcal</p>
          </div>
        </div>




          <!-- <h4><?= $hasil['ENERC_KCAL']['label']; ?> : <?= $hasil['ENERC_KCAL']['quantity'];?></h4> -->
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