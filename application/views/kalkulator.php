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
  <link href="assets/css/kalkulator.css" rel="stylesheet">

  <title>Diet-in Aja</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url('Welcomediet')?>">Diet-in Aja</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link active" href="<?= base_url('Welcomediet')?>">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="<?= base_url('kalkulator')?>">Calculator</a>
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
      <!--   the calories your body needs -->
      <h1 class="display-4">Let's Start<span><br> Counting</span> the<span> Calories</span><br>Your Body<span> Needs.</span></h1>
      <hr>
    </div>
  </div>
  <!-- Akhir Jumbotron -->


  <!-- Container -->
  <div class="container">

    <!-- Info Panel -->
    <div class="row justify-content-center ">
        <div class="col-10 info-panel">
        <h2 class="display-5">Your Calories : <?= $hitung; ?> Kcal</h2>
          <div class="row">
          </div>
        </div>
      </div>
    <!-- Akhir Info Panel -->


    <!-- Working Space -->
    <div class="row workingspace">
      <div class="col-lg-6">
        <img src="assets/css/img/menu1.png" alt="workingspace" class="img-fluid">
      </div>
      <div class="col-lg-5">

        <form method="post" action="<?= base_url('Kalkulator') ?>">

          <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Gender </legend>
            <div class="col-sm-10" >
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="male" checked>
                <label class="form-check-label" for="gridRadios1">
                  <img src="assets/css/img/man.png" alt="workingspace" class="img-fluid">
                  Male
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="female">
                <label class="form-check-label" for="gridRadios2">
                  <img src="assets/css/img/woman.png" alt="workingspace" class="img-fluid">
                  Female
                </label>
              </div>
            </div>
          </div>

          <br>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Height(Cm)</label>
            <input type="text" class="form-control" id="inputEmail3" placeholder="Cm" name="tinggi">
          </div>

          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Weight(Kg)</label>
            <input type="text" class="form-control" id="inputPassword3" placeholder="Kg" name="berat">
          </div>

          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Age</label>
            <input type="text" class="form-control" id="inputPassword3" placeholder="Age" name="umur">
          </div>

          <!-- <h3><?= $hitung; ?></h3> -->


          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary" name="btKalkulator" value="true">Calculate</button>
            </div>
          </div>
        </form>
      </div>
    </div>


    <!-- Footer -->
    <div class="row footer">
      <div class="col text-center">
        <p>2021 All Rights Reserved by MARS.</p>
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