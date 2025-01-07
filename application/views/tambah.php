<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>
<body>
    <h3>Halaman Tambah Mahasiswa</h3>
    <form action="<?php echo base_url() ?>Home/createData" method="post">
        <label for="name">Masukan Nama : </label>
        <input type="text" name="name" id="name">
        <small><?php echo form_error('name') ?></small>
        <br>
        <button type="submit" name="tambah">Tambah</button>
    </form>
</body>
</html>