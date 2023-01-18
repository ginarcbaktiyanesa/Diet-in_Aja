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
    <link href="assets/css/profile.css" rel="stylesheet">

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
            <a class="nav-item nav-link active" href="<?php echo base_url('Welcomediet')?>">Home <span class="sr-only">(current)</span></a>
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
      <h1 class="display-3">EDIT PROFILE</h1>
        <h1 class="display-5">

        <?= $this->session->flashdata('message'); ?>

        <form action="<?= base_url('Profile')?>" method="post">
        <td>First Name</td>
				<br><td><input type="text" name="first_name" value="<?= $this->session->userdata('first_name');?>"></td><br>
            <?= form_error('first_name', '<small class="text-danger">', '</small>'); ?>
            </tr>
            <br>
            <tr>
            <td>Last Name</td>
				<br><td><input type="text" name="last_name" value="<?= $this->session->userdata('last_name');?>"></td><br>
            <?= form_error('last_name', '<small class="text-danger">', '</small>'); ?>
            </tr>
            <br>
            <tr>
				<td>Username</td>
				<br><td><input type="text" name="username" value="<?= $this->session->userdata('username');?>"readonly></td>
            </tr>
            <br>
            <br>
            <tr>
				<td>Current Password</td>
				<br><td><input type="password" name="current_password"></td><br>
            <?= form_error('current_password', '<small class="text-danger">', '</small>'); ?>
            </tr>
            <br>
            <tr>
				<td>New Password</td>
				<br><td><input type="password" name="new_password1"></td><br>
            <?= form_error('new_password1', '<small class="text-danger">', '</small>'); ?>
            </tr>
            <br>
            <tr>
				<td>Confirm Password</td>
				<br><td><input type="password" name="new_password2"></td>
      </tr>
      </h1>
        <hr>
        <button type="submit" class="btn btn-primary" onclick="return confirm('Anda yakin ingin mengubah data profile?')"><span>SAVE</span></button>
        <button type="reset" class="btn btn-primary"><span>CANCEL</span></button>
        </form>
      </div>
    </div>
    <!-- Akhir Jumbotron -->

<!-- Info Panel -->
<!-- <div class="row justify-content-center">
      <div class="col-4 info-panel">
      </div>
    </div> -->
          <!-- Akhir Info Panel -->

    <!-- Container -->
    <!-- <div class="container"> -->


      <!-- Working Space -->
      <!-- <div class="row workingspace">
        <div class="col-lg-6">

        </div>
        <div class="col-lg-5">
        
        </div>
      </div> -->
      <!-- Akhir Working Space -->

      <!-- Footer -->
      <!-- <div class="row footer"> -->
        <div class="col text-center">
          <br>
          <p>2021 All Rights Reserved by IF7_MARS.</p>
        </div>
      <!-- </div> -->
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