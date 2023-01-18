<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/signup.css">

    <!-- My Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&display=swap" rel="stylesheet">

    <title><?= $judul; ?></title>
  </head>
  <body>

    <!-- Gambar Background -->
    <div class="bg"></div>
    <!-- Akhir Gambar Background -->

    <!-- Form Login -->
    <div class="isiform col-sm-7">
        <h1 class="judul">Sign Up <br> DIET-in AJA</h1>
        <form method="post" action="<?= base_url('Signup'); ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">First name</label>
                <input type="text" class="form-control formulir" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First name" name="first_name" value="<?= set_value('first_name'); ?>" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Last name</label>
                <input type="text" class="form-control formulir" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last name" name="last_name" value="<?= set_value('last_name'); ?>" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                <input type="text" class="form-control formulir" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" name="username" value="<?= set_value('username'); ?>" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
                <input type="password" class="form-control formulir" id="exampleInputPassword1" placeholder="Password" name="password1" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input type="password" class="form-control formulir" id="exampleInputPassword1" placeholder="Confirm Password" name="password2" required>
            </div>
            <p class="signuplink">Already have an account? <a href="<?= base_url('Login') ?>">Log In</a></p>
            <div class="tombol">
            <button type="submit" class="btn btn-primary"><span>Sign Up</span></button>
            </div>
        </form>
    </div>
    <!-- Akhir form login -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>