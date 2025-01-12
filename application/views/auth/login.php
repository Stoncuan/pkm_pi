<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title ?></title>
    <link rel="stylesheet" href="<?php base_url() ?>assets/template/login/css/style.css">

    <!-- Bostrap 5.1.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="wrapper">
        <div class="logo">
            <img src="<?php echo base_url() ?>assets/image/logo.png" alt="logo unipa">
        </div>
        <div class="text-center mt-4 name">
            Login Admin
        </div>
        <?php echo $this->session->flashdata('flash'); ?>
        <form class="p-3 mt-3" action="<?php base_url('Auth') ?>" method="post">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="username" id="username" placeholder="Masukan Username">
            </div>
            <?php echo form_error('username', '<small class="text-danger">', '</small>')?>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="password" placeholder="Masukan Password">
            </div>
            <?php echo form_error('password', '<small class="text-danger">', '</small>')?>
            <button type="submit" class="btn mt-3">Login</button>
        </form>
        <div class="text-center fs-6">
            <a href="#">Forget password?</a> or <a href="#">Sign up</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>