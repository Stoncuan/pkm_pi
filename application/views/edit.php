<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>

<body>
    <h3>Edit Mahasiswa</h3>
    <form action="<?php base_url() ?>Home/edit" method="post">
        <div style="display: none">
            <input type="text" name="id" id="id" value="<?php echo $mahasiswa['id'] ?>">
        </div>

        <label for="name">Nama : </label>
        <input type="text" name="name" id="name" value="<?php echo $mahasiswa['name'] ?>">

        <button type="submit" name="edit">Edit</button>
    </form>
</body>

</html>